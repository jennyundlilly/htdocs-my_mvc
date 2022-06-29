<?php

    class ApiController extends Controller{

        function start(){
            $returnData = msg(0,404,'Seite nicht gefunden.');
                  
            echo json_encode($returnData);
        }
        function register(){
  
            $returnData = msg(1,201,'You have successfully registered.');
                  
            echo json_encode($returnData);
        }

        function login(){
  
            $returnData = msg(1,201,'You have successfully login.');
                  
            echo json_encode($returnData);
        }

        function user_info(){
  
            $returnData = msg(1,201,'You have successfully user_info.');
                  
            echo json_encode($returnData);
        }
    
        
    }
    function msg($success,$status,$message,$extra = []){
        return array_merge([
            'success' => $success,
            'status' => $status,
            'message' => $message
        ],$extra);
    } 
?>