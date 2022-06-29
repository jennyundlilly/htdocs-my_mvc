<?php

class ProductController extends Controller
{

    public function index()
    {
        // get Object
        $products = $this->model('ProductModel');
        // get Method
        $data = $this->model('ProductModel')->getList();

        $this->render(
            'layouts/client_layout',
            [
                'products' => $this->model('ProductModel')->count('products'),
                'title' => 'Product List',
                'page' => 'Products / List',
            ]
        );
    }

    public function detail($id = '', $slug = '', $size = '')
    {

        $product_model = $this->model('ProductModel');
        $products = $product_model->getList();

        $this->render(
            'layouts/client_layout',
            [
                'products' => $products,
                'title' => 'Product Detail',
                'page' => 'Products / Detail',
            ]

        );
    }

    public function edit($id = '', $slug = '', $size = '')
    {
        $product_model = $this->model('ProductModel');
        $products = $product_model->getList();

        echo $id;
        echo '<br/>';
        echo $slug;

        $this->render(
            'layouts/client_layout',
            [
                'products' => $products,
                'title' => 'Product Edit',
                'page' => 'Products / Detail',
            ]

        );
    }

    public function gotoCurrentUrl($id = '', $slug = '', $size = '')
    {
        global $config;
        $config['app']['currentUrl'] = App::$app->getUrl();
        echo $config['app']['currentUrl'];

        header("Location: ".$config['app']['currentUrl']);
        exit();
    }
}
