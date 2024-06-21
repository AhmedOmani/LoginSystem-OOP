<?php 

require_once 'login-classes.php' ;

class LoginController extends Login {

    private $username ;
    private $password ;

    public function __construct($username , $password) {
        $this->username = $username ;
        $this->password = $password ;
    }
 
    public function loginUser() {
        $this->getUser($this->username , $this->password) ;
    }
    
}

?>