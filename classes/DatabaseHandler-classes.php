<?php

class DatabaseHandler{

    protected function connect() {
        try {
            $dsn = 'mysql:host=localhost;dbname=ooplogin';
            $username = 'root';
            $password = '';
            $options = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            );
    
            return new PDO($dsn, $username, $password, $options);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            exit();
        }
    }
}

?>