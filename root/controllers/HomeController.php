<?php

class HomeController extends Controller{

    public $home_model;

    public function index(){

        // get Object
        $this->home_model = $this->model('HomeModel');

        $this->render(
            'layouts/client_layout2',
            [
                'title' => 'Home',
                'page' => 'Home / Index',
            ]
       );
    }
}