<?php

require_once 'DatabaseHandler-classes.php' ;

class Login extends DatabaseHandler {

    protected function getUser($username , $password) {

        $statement = $this->connect()->prepare('SELECT user_password FROM users WHERE user_name = ? OR user_email = ?;');

        if (!$statement->execute(array($username , $password))) {
            $statement = NULL ;
            header('location:../index.php?error=statefailed') ;
            exit() ;
        }

        if ($statement->rowCount() == 0) {
            $statement = NULL ;
            header('location:../index.php?error=usernotfound') ;
            exit() ;
        }

        $passHashed = $statement->fetchAll(PDO::FETCH_ASSOC) ;
        $checkedPass = password_verify($password , $passHashed[0]['user_password']) ;
        
        if ($checkedPass == false) {
            
            $statement = NULL ;
            header('location:../index.php?error=wrongpassword') ;
            exit() ;

        } elseif ($checkedPass == true) {
           
           $statement = $this->connect()->prepare('SELECT * FROM users WHERE user_name = ? 
                                                    OR user_email = ? AND user_password = ?;');

            if (!$statement->execute(array($username , $username , $password))) {
                $statement = NULL ;
                header('location:../index.php?error=statefailed') ;
                exit() ;
            }

            if ($statement->rowCount() == 0) {
                $statement = NULL ;
                header('location:../index.php?error=usernotfound') ;
                exit() ;
            }

            $user = $statement->fetchAll(PDO::FETCH_ASSOC) ;
            session_start() ;
            $_SESSION['userid'] = $user[0]['user_id'] ;
            $_SESSION['username'] = $user[0]['user_name'] ;


        }


    }
   
}
?>