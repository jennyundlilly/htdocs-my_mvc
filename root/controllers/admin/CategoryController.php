<?php

class CategoryController extends Controller{
    public function index(){

        // get Object
        $this->home_model = $this->model('HomeModel');

        $this->render(
            'admin/layouts/admin_layout',
            [
                'title' => 'Category',
                'page' => 'Admin / Category / Index',
            ]
       );
    }
} 