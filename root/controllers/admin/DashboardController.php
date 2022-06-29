<?php

class DashboardController extends Controller{
    public function index(){

        // get Object
        $this->home_model = $this->model('HomeModel');

        $this->render(
            'admin/layouts/admin_layout',
            [
                'title' => 'Admin',
                'page' => 'Admin / Dashboard',
            ]
       );
    }

    public function detail( $id='' ){
        echo "Admin Dashboard details " . $id;
    }
} 