<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

class ArtikelController extends Controller{

    function all(){
        // mein ip hash qpWZexGYrC6nTGas
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // get client ip, encode ip and reverse for response
            $resToken = strrev(MyFunction::encrypt($_SERVER['REMOTE_ADDR']));

            // get json data and decode to array
            $post = json_decode(file_get_contents('php://input'), true);
            $reqToken = strrev($post['token']);

            // check token and ip
            if (MyFunction::decrypt($reqToken) == $_SERVER['REMOTE_ADDR']) {
                $data = $this->database()->fetchAll("artikel");
                echo json_encode(MyFunction::apiResponse(200, "", NULL, $data));
            } else {
                echo json_encode(MyFunction::apiResponseError(401, "Die Anfrage kann nicht ohne gültige Authentifizierung durchgeführt werden."));
            }   
        } else {
            echo json_encode(MyFunction::apiResponseError(405, "Falsche HTTP-Methoden"));
        }
    } 

    function save(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // json post -> {"token":"=k2ZepGYrC6nTGas","data":{"name":"Handy"}}

            // get client ip, encode ip and reverse for response
            $resToken = strrev(MyFunction::encrypt($_SERVER['REMOTE_ADDR']));

            $post = json_decode(file_get_contents('php://input'), true);
            $reqToken = strrev($post['token']);
            $name = $post['data']['name'];

            // check token and ip
            if (MyFunction::decrypt($reqToken) == $_SERVER['REMOTE_ADDR']) {

                // check empty input
                if (MyFunction::checkEmpty($name)) {
                    echo json_encode(MyFunction::apiResponseError(411, "Fehlerhafte Eingabe"));
                } else {
                    // check name exists
                    $query = 'name = ' . '"' . $name . '"';
                    if(count($this->database()->fetchOne("category", $query)) > 0){
                        echo json_encode(MyFunction::apiResponseError(421, "Category vorhanden"));
                    } else {
                        // save
                        $data = ["name" => $name];
                        $cateId = $this->database()->insert("category", $data);
                        
                        // save success
                        if ($cateId > 0) {
                            // object kunde
                            $kunde = $this->database()->fetchId("category", $cateId);

                            // get client ip, encode ip and reverse for response
                            $resToken = strrev(MyFunction::encrypt($_SERVER['REMOTE_ADDR']));
                            echo json_encode(MyFunction::apiResponse(200, "Category gespeichert.", NULL, $kunde));
                        } else {
                            echo json_encode(MyFunction::apiResponseError(451, "Datenbank fehler, versuchen Sie nochmal."));
                        }
                    }                      
                }               
            } else {
                echo json_encode(MyFunction::apiResponseError(401, "Die Anfrage kann nicht ohne gültige Authentifizierung durchgeführt werden."));
            }   
        } else {
            echo json_encode(MyFunction::apiResponseError(405, "Falsche HTTP-Methoden"));
        }
    } 

    function edit(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            // json post -> {"token":"=k2ZepGYrC6nTGas","data":{"id":"66"}} con

            $post = json_decode(file_get_contents('php://input'), true);
            $reqToken = strrev($post['token']);
            $id = $post['data']['id'];

            // check token and ip 
            if (MyFunction::decrypt($reqToken) == $_SERVER['REMOTE_ADDR']) {
                // fetch category id
                $category = $this->database()->fetchId("category", $id);

                // check fetch not empty
                if (!empty($category)) {
                    echo json_encode(MyFunction::apiResponse(200, NULL, NULL, $category));
                }else {
                    echo json_encode(MyFunction::apiResponseError(421, "Keine Daten im Database"));
                }
            } else {
                echo json_encode(MyFunction::apiResponseError(401, "Die Anfrage kann nicht ohne gültige Authentifizierung durchgeführt werden."));
            }
        } else {
            echo json_encode(MyFunction::apiResponseError(405, "Falsche HTTP-Methoden"));
        }
    }

    function update(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // json post -> {"token":"=k2ZepGYrC6nTGas","data":{"id":"66","name":"Handy"}}

            // get client ip, encode ip and reverse for response
            $resToken = strrev(MyFunction::encrypt($_SERVER['REMOTE_ADDR']));

            $post = json_decode(file_get_contents('php://input'), true);
            $reqToken = strrev($post['token']);
            $name = $post['data']['name'];
            $id = $post['data']['id'];

            // check token and ip
            if (MyFunction::decrypt($reqToken) == $_SERVER['REMOTE_ADDR']) {

                // check not empty input
                if (!MyFunction::checkEmpty($name) || !MyFunction::checkEmpty($id)) {
                    
                    // fetch category id
                    $category = $this->database()->fetchId("category", $id);

                    // check fetch not empty
                    if (!empty($category)) {

                        // fetch category name
                        $query = 'name = ' . '"' . $name . '"';
                        $currentCategory = $this->database()->fetchOne("category", $query);

                        // check category name exists
                        if(!empty($currentCategory)){

                            // check unique old category
                            if ($category['id'] == $currentCategory['id']) {
                               
                                    // update category
                                    $data = ["name" => MyFunction::xss_clean($name)];
                                    $condition = ["id" => $id];
                                
                                    $cateId = $this->database()->update("category", $data, $condition);
                                    
                                    // check update success
                                    if ($cateId != -1) {
                                        echo json_encode(MyFunction::apiResponse(200, "Category updated.", NULL, NULL));
                                    } else {
                                        echo json_encode(MyFunction::apiResponseError(451, "Datenbank fehler, versuchen Sie nochmal."));
                                    }
                            }else {
                                echo json_encode(MyFunction::apiResponseError(421, "Category vorhanden"));
                            }
                        } else {
                            // update category
                            $data = ["name" => MyFunction::xss_clean($name)];
                            $condition = ["id" => $id];
                            $cateId = $this->database()->update("category", $data, $condition);

                            // check update success
                            if ($cateId > 0) {
                                echo json_encode(MyFunction::apiResponse(200, "Category updated.", NULL, NULL));
                            } else {
                                echo json_encode(MyFunction::apiResponseError(451, "Datenbank fehler, versuchen Sie nochmal."));
                            }
                        }    
                    } else {
                        echo json_encode(MyFunction::apiResponseError(421, "Keine Daten im Database"));
                    }           
                } else {
                    echo json_encode(MyFunction::apiResponseError(411, "Fehlerhafte Eingabe"));         
                }               
            } else {
                echo json_encode(MyFunction::apiResponseError(401, "Die Anfrage kann nicht ohne gültige Authentifizierung durchgeführt werden."));
            }   
        } else {
            echo json_encode(MyFunction::apiResponseError(405, "Falsche HTTP-Methoden"));
        }
    }

    function delete(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            // json post -> {"token":"=k2ZepGYrC6nTGas","data":{"id":"66"}} con

            $post = json_decode(file_get_contents('php://input'), true);
            $reqToken = strrev($post['token']);
            $id = $post['data']['id'];

            // check token and ip 
            if (MyFunction::decrypt($reqToken) == $_SERVER['REMOTE_ADDR']) {
                // fetch category id
                $category = $this->database()->fetchId("category", $id);

                // check fetch not empty
                if (!empty($category)) {
                    echo json_encode(MyFunction::apiResponse(200, NULL, NULL, $category));
                }else {
                    echo json_encode(MyFunction::apiResponseError(421, "Keine Daten im Database"));
                }
            } else {
                echo json_encode(MyFunction::apiResponseError(401, "Die Anfrage kann nicht ohne gültige Authentifizierung durchgeführt werden."));
            }
        } else {
            echo json_encode(MyFunction::apiResponseError(405, "Falsche HTTP-Methoden"));
        }
    }

}


?>