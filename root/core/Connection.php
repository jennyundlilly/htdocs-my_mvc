<?php

class Connection
{
    private static $instance = null, $conn = null;

    private function __construct($config)
    {
        // connec database
        try {
            $dsn = 'mysql:dbname=' . $config['db'] . ';host=' . $config['host'];
            $option = [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];

            $con = new PDO($dsn, $config['user'], $config['pass'], $option);
            self::$conn = $con;

        } catch (Exception $e) {
            $message = $e->getMessage();
            if (preg_match('/Access denied for user/', $message)) {
                die('Die Verbindung zum Datenbank ist fehlgeschlagen!');
            }
            if (preg_match('/Unknown database/', $message)) {
                die('Datenbank ist nicht vorhanden!');
            }
        }
    }

    public static function getInstance($config)
    {
        if (self::$instance == null) {
            new Connection($config);
            self::$instance = self::$conn;
        }
        return self::$instance;
    }

    public static function disconnect()
    {
        self::$instance = null;
    }
}
