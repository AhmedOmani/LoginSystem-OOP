<?php
require_once 'signup-classes.php' ;
class SignupController extends Signup {
    private $username ;
    private $email ;
    private $password ;
    private $passwordRepeat ;
    public function __construct($username , $email , $password , $passwordRepeat) {
        $this->username = $username ;
        $this->email = $email ;
        $this->password = $password ;
        $this->passwordRepeat = $passwordRepeat ;
    }

    public function signupUser() {
        
        if ($this->validUserName() == false) {
            // echo not valid username
            header('location: ../index.php?error=invalid-username') ;
            exit() ;
        }
        
        if ($this->validEmail() == false) {
            // echo not valid email .
            header('location: ../index.php?errror=invalid-email') ;
            exit() ;
        }

        if ($this->pwdMatch() == false) {
            // echo passwords dont match .
            header('location: ../index.php?error=password-not-match') ;
            exit() ;
        }

        if ($this->UserEmailNotTaken() == false) {
            // echo user or email are exists in database .
            header('location: ../index.php?error="user-or-email-exists"') ;
            exit() ;
        }

        $this->setUser($this->username , $this->password , $this->email) ;

    }

    //Username Validation => true if valid , false if not .
    private function validUserName() {
        $notInvlid = true ;
        if (!preg_match("/^[a-zA-Z0-9]*$/" , $this->username)) 
            $notInvlid = false ;
        return $notInvlid;
    }

    //Email Validation => true if valid , false if not .
    private function validEmail() {
        $notInvalid = true ;
        if (!filter_var($this->email , FILTER_VALIDATE_EMAIL)) 
            $notInvalid = false ;
        return $notInvalid ;
    }

    //Password matching => true if matched , false if not .

    private function pwdMatch() {
        $repeat = true ;
        if ($this->password !== $this->passwordRepeat)
            $repeat = false ;
        return $repeat ;
    }

    //Username or Email are exists ? => true if not exist , false if exist in database .
    private function UserEmailNotTaken() {
        $notfound = false ;
        if (!$this->checkUser($this->username , $this->email))
            $notfound = true ;
        return $notfound ;
    }
} 