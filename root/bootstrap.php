<?php

define('_DIR_ROOT', __DIR__);

// autoload configs file
$configs_dir = scandir(_DIR_ROOT . '/configs');
if (!empty($configs_dir)){
    foreach ($configs_dir as $item){
        if ($item!='.' && $item!='..' && file_exists(_DIR_ROOT . '/configs/'.$item)){
            require_once _DIR_ROOT . '/configs/'.$item;
        }
    }
}

require_once _DIR_ROOT . '/core/Route.php';
require_once _DIR_ROOT . '/core/App.php';

if (!empty($config['database'])) {
    $db_config = $config['database'];

    if (!empty($db_config)) {
        require_once _DIR_ROOT . '/core/Connection.php';
        require_once _DIR_ROOT . '/core/Database.php';
        //require_once 'core/DB.php';
        // $db = new Database();
        // $sql = "SELECT * FROM products;";
        // $query = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        // print_r($query);
    }
}

require_once _DIR_ROOT . '/core/Model.php';

require_once _DIR_ROOT . '/core/Controller.php';

