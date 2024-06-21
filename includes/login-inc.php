<?php

    if (isset($_POST['submit'])) {
        
        //Grabbing thr data
        $username = $_POST['username'] ;
        $password = $_POST['password'] ;
        
        //Instantiate a SignupController class 
        include "../classes/DatabaseHandler-classes.php" ;
        include "../classes/login-classes.php";
        include "../classes/login-contr-classes.php";
        $go = new LoginController($username , $password) ;
        //Running error handlers and users signup
        $go->loginUser() ;

        //redirect to index
        header('location: ../index.php?error=none') ;
        
    }
?>