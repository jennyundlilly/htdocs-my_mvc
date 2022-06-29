<?php

class Database
{
    private $__conn;

    // verbinden database
    function __construct()
    {
        global $db_config;
        $this->__conn = Connection::getInstance($db_config);
    }

    // hinzufügen
    function insertData($table, $data)
    {
        if (!empty($data)) {
            $fieldStr = '';
            $valueStr = '';
            foreach ($data as $key => $value) {
                $fieldStr .= $key . ',';
                $valueStr .= "'" . $value . "',";
            }
            $fieldStr = rtrim($fieldStr, ',');
            $valueStr = rtrim($valueStr, ',');

            $sql = "INSERT INTO $table($fieldStr) VALUES ($valueStr)";

            $status = $this->query($sql);

            if ($status) {
                return true;
            }
        }

        return false;
    }

    // ändern
    function updateData($table, $data, $condition = '')
    {
        if (!empty($data)) {
            $updateStr = '';
            foreach ($data as $key => $value) {
                $updateStr .= "$key='$value',";
            }

            $updateStr = rtrim($updateStr, ',');

            if (!empty($condition)) {
                $sql = "UPDATE $table SET $updateStr WHERE $condition";
            } else {
                $sql = "UPDATE $table SET $updateStr";
            }

            $status = $this->query($sql);

            if ($status) {
                return true;
            }
        }

        return false;
    }

    // löschen
    function deleteData($table, $condition = -1)
    {
        if (!empty($condition)) {
            $sql = 'DELETE FROM ' . $table . ' WHERE ' . $condition;
        } else {
            $sql = 'DELETE FROM ' . $table;
        }

        $status = $this->query($sql);

        if ($status) {
            return true;
        }

        return false;
    }

    /**
     * manuelle Anfrage
     * 
     * $sql = "SELECT * FROM products;";
     * $query = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
     * print_r($query);
     */
    function query($sql)
    {
        try {
            $statement = $this->__conn->prepare($sql);
            $statement->execute();

            return $statement;
        } catch (Exception $exception) {
            $mess = $exception->getMessage();
            $data['message'] = $mess;
            App::$app->loadError('database', $data);
            die();
        }
    }

    // letzte id nach dem hinzufügen
    function lastInsertId()
    {
        return $this->__conn->lastInsertId();
    }
}
