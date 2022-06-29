<?php

class App
{
    private $__controller, $__action, $__params, $__routes, $__newController, $__urlArr;
    static public $app;

    public function __construct()
    {
        global $routes, $config;
        self::$app = $this;

        $this->__controller = 'home';        
        $this->__action = 'index';
        $this->__params = [];
        $this->__routes = new Route();

        $this->__newController = '';
        $this->__urlArr = [];

        $this->handleUrl();

        $this->getNewController();
        $this->setController();

        $this->setAction();

        $this->setParams();

        $this->setRouting();
    }
    private function handleUrl()
    {
        
        // /admin/dashboard/index
        $url = $this->getUrl();

        // /admin/dashboard/index
        $url = $this->__routes->handleRoute($url);

        // string to array
        $this->__urlArr = array_filter(explode('/', $url));

        // sort array key
        $this->__urlArr = array_values($this->__urlArr);
    }
    private function getNewController()
    {
        // wenn url array vorhanden
        if (!empty($this->__urlArr)) {
            foreach ($this->__urlArr as $key => $value) {
                $this->__newController .= $value . '/';
                $fileCheck = trim($this->__newController, '/');

                // string to array
                $fileArr = explode('/', $fileCheck);

                // letzte value 1. buchstabe wird gross geschrieben
                $fileArr[count($fileArr) - 1] = ucfirst($fileArr[count($fileArr) - 1]);

                // array to string
                $fileCheck = implode('/', $fileArr);

                // lösche 1. element im array
                if (!empty($this->__urlArr[$key - 1])) {
                    unset($this->__urlArr[$key - 1]);
                }

                // file gefunden mit oder ohne ordner
                if (file_exists(_DIR_ROOT . '/controllers/' . $fileCheck . 'Controller.php')) {
                    $this->__newController =  $fileCheck . 'Controller';
                    break;
                }
            }
            // sort array key
            $this->__urlArr = array_values($this->__urlArr);
        }
    }

    private function setController()
    {
        if (!empty($this->__urlArr[0])) {
            $this->__controller = ucfirst($this->__urlArr[0]) . 'Controller';
            unset($this->__urlArr[0]);
        } else {
            $this->__controller = ucfirst($this->__controller) . 'Controller';
            $this->__newController = $this->__controller;
        }

        if (file_exists(_DIR_ROOT . '/controllers/' . $this->__newController . '.php')) {
            require_once(_DIR_ROOT . '/controllers/' . $this->__newController . '.php');
            if (class_exists($this->__controller)) {
                // neue controller object
                $this->__controller = new $this->__controller();
            } else {
                // Class nicht vorhanden
                $this->loadError("404");
            }
        } else {
            // Controller nicht vorhanden
            $this->loadError("404");
            return;
        }
    }

    private function setAction()
    {
        if (!empty($this->__urlArr[1])) {
            $this->__action = $this->__urlArr[1];
            unset($this->__urlArr[1]);
        }
    }

    private function setParams()
    {
        // rest vom url array als params
        $this->__params = array_values($this->__urlArr);
    }

    private function setRouting()
    {
        // CHECK METHOD
        if (method_exists($this->__controller, $this->__action)) {
            call_user_func_array([$this->__controller, $this->__action], $this->__params);
        } else {
            // Methode nicht vorhanden
            $this->loadError("404");
        }
    }

    public function getUrl()
    {
        if (!empty($_SERVER['PATH_INFO'])) {
            return $_SERVER['PATH_INFO'];
        } else {
            return '/';
        }
    }

    public function loadError($name = '404', $data = [])
    {
        extract($data);
        require_once _DIR_ROOT . '/views/errors/' . $name . '.php';
    }
}
