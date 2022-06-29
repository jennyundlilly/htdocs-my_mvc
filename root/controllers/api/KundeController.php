<?php
    class KundeController extends Controller{

        // Must have
        function start(){
            // get json data and decode to object
            $data = json_decode(file_get_contents('php://input'), true);

            $name = $data['name'];
            $email = $data['email'];
            $password = $data['password'];

            echo json_encode($data);
        }

        function register(){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                // get json data and decode to object
                $data = json_decode(file_get_contents('php://input'), true);

                $name = $data['name'];
                $email = $data['email'];
                $password = $data['password'];

                // check empty input
                if (MyFunction::checkEmpty($name) 
                || MyFunction::checkEmpty($email) 
                || MyFunction::checkEmpty($password)) {
                    echo json_encode(MyFunction::apiResponseError(411, "Fehlerhafte Eingabe"));
                } else {
                    // check email exists
                    if(count($this->database()->checkKundeEmail($email)) > 0){
                        echo json_encode(MyFunction::apiResponseError(421, "Email vorhanden"));
                    } else {
                        // save
                        $data = ["name" => $name, "email" => $email, "password" => MyFunction::hashPass($password)];
                        $kundeId = $this->database()->insert("kunde", $data);
                        
                        // save success
                        if ($kundeId > 0) {
                            // object kunde
                            $kunde = $this->database()->fetchId("kunde", $kundeId);

                            // get client ip, encode ip and reverse for response
                            $resToken = strrev(MyFunction::encrypt($_SERVER['REMOTE_ADDR']));
                            echo json_encode(MyFunction::apiResponse(200, "Registrierung erfolgreich.", $resToken, $kunde));
                        } else {
                            echo json_encode(MyFunction::apiResponseError(451, "Datenbank fehler, versuchen Sie nochmal."));
                        }
                    }                      
                }               
            } else {
                echo json_encode(MyFunction::apiResponseError(405, "Falsche HTTP-Methoden"));
            }
        }

        function login(){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                // get json data and decode to object
                $data = json_decode(file_get_contents('php://input'), true);

                $email = $data['email'];
                $password = $data['password'];

                // check empty input
                if (MyFunction::checkEmpty($email) 
                || MyFunction::checkEmpty($password)) {
                    echo json_encode(MyFunction::apiResponseError(411, "Fehlerhafte Eingabe"));
                } else {
                    // check email and password exists
                    $query = 'email = ' . '"' . $email . '"' . ' AND password = ' . '"' . MyFunction::hashPass($password). '"';
                    $kunde = $this->database()->fetchOne("kunde", $query); 
                    if (empty($kunde)) {
                        echo json_encode(MyFunction::apiResponseError(441, "fasche email oder password"));
                    } else {
                        // get client ip, encode ip and reverse for response
                        $resToken = strrev(MyFunction::encrypt($_SERVER['REMOTE_ADDR']));
                        echo json_encode(MyFunction::apiResponse(200, "Login erfolgreich.", $resToken, $kunde));
                    }         
                }               
            } else {
                echo json_encode(MyFunction::apiResponseError(405, "Falsche HTTP-Methoden"));
            }
        }
           
        function delete(){
            if($_SERVER["REQUEST_METHOD"] == "GET"){
                $url = MyFunction::getUrl();
                // check empty id
                if (MyFunction::checkEmpty($url[3])) {
                    $this->view(
                        "admin-master", [ 
                        "Page"      =>  "kunde/list",
                        "Title"     =>  "Kunde List",
                        "SetUrl"    =>  true,
                        "Error"     =>  "Kunde kann nicht gelöscht werden.",
                        "Kunden"    =>  $this->database()->fetchAll("kunde")
                    ]);
                } else {
                    // id exists
                    $id = (int) $url[3];
                    $k = $this->database()->fetchId("kunde", $id);
                    
                    if ($k != null) {

                        $kunde = $this->database()->delete("kunde", $id);
                        // $this->view(
                        //     "admin-master", [ 
                        //     "Page"      =>  "kunde/list",
                        //     "Title"     =>  "Kunde List 1",
                        //     //"SetUrl"    =>  true,
                        //     "Error"     =>  "Kunde " . $k["name"] . " wurde gelöscht.",
                        //     "Kunden"    =>  $this->database()->fetchAll("kunde")
                        // ]);
                        header("Location: http://c8ea947.online-server.cloud/admin/kunde");
                        
                    } else {
                    
                        $this->view(
                            "admin-master", [ 
                            "Page"      =>  "kunde/list",
                            "Title"     =>  "Kunde List 2",
                            //"SetUrl"    =>  true,
                            "Error"     =>  "Kunde 2 nicht vorhanden.",
                            "Kunden"    =>  $this->database()->fetchAll("kunde")
                        ]);
                    }
                }
            }            
        }
    }
?>