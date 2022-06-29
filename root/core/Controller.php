<?php

class Controller{

    public function model($model){
        if (file_exists(_DIR_ROOT . '/models/' . $model . '.php')) {
            require_once _DIR_ROOT . '/models/' . $model . '.php';
            if (class_exists($model)) {
                return new $model;
            }else {
                return false;
            }
        }else {
            return false;
        }
    }

    public function render($view, $data=[]){
        if (file_exists(_DIR_ROOT . '/views/' . $view . '.php')) {
            // load master view
            require_once _DIR_ROOT . '/views/' . $view . '.php';
        }
    }
}