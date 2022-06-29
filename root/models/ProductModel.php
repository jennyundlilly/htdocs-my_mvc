<?php

class ProductModel extends Model{

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
            'ProductModel 1',
            'ProductModel 2',
            'ProductModel 3',
            'ProductModel 4'
        ];
        return $data;
    }
}