<?php

class UserModel extends Model{

    function tableFill(){
        return 'users';
     }
 
     function fieldFill(){
         return '*';
     }
 
     function primaryKey(){
         return 'id';
     }

    public function checkLogin($email, $pass){
        $data = [
            'HomeModel 1',
            'HomeModel 2',
            'HomeModel 3',
            'HomeModel 4'
        ];
        return $data;
    }
}