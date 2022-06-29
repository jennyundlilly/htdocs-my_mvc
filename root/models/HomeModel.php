<?php

class HomeModel extends Model{

    function tableFill(){
        return 'categories';
     }
 
     function fieldFill(){
         return '*';
     }
 
     function primaryKey(){
         return 'id';
     }

    public function getList(){
        $data = [
            'HomeModel 1',
            'HomeModel 2',
            'HomeModel 3',
            'HomeModel 4'
        ];
        return $data;
    }
}