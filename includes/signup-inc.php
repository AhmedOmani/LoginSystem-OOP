<?php

    if (isset($_POST['submit'])) {
        
        //Grabbing thr data
        $username = $_POST['username'] ;
        $email = $_POST['email'] ;
        $password = $_POST['password'] ;
        $passwordRepeat = $_POST['Reppassword'] ;
        
        //Instantiate a SignupController class 
        include "../classes/DatabaseHandler-classes.php" ;
        include "../classes/signup-classes.php";
        include "../classes/signup-cont-classes.php";
        $go = new SignupController($username , $email , $password , $passwordRepeat) ;
        //Running error handlers and users signup
        $go->signupUser() ;

        //redirect to index
        header('location: ../index.php?error=none') ;
        
    }
?>