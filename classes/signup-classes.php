<?php

require_once 'DatabaseHandler-classes.php' ;

class Signup extends DatabaseHandler {

    protected function setUser($username , $password , $email) {

        $statement = $this->connect()->prepare('INSERT INTO users (user_name , user_password , user_email) VALUES(? , ? , ?);') ;
        $hashed_password = password_hash($password , PASSWORD_DEFAULT) ;

        if (!$statement->execute(array($username , $hashed_password , $email))) {
            $statement = null ;
            header('location: ../index.php?error=insersionFailed') ;
            exit() ;
        }

    }
    protected function checkUser($username , $email) {
        
        $statement = $this->connect()->prepare('SELECT user_name FROM users WHERE user_name = ? OR user_email = ?;') ;

        //Check excution of database .
        if (!$statement->execute(array($username , $email))) {
            $statement = null ;
            header("location:../index.php?error=stmtfailed") ;
            exit() ;
        }
        
        //By defualt we assume that no rows returned .
        $returnedRows = 0 ;
        if ($statement->rowCount() > 0) $returnedRows = 1 ;

        return $returnedRows ;
    }
}
?>