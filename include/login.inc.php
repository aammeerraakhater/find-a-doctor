<?php

require_once '../connect_db.php';
require_once 'function.php';

    if(isset($_POST["submit"])){
        $email=$_POST["email"];
        $pwd=$_POST["password"];
   
        if(isEmptyLogin($email,$pwd)!==false){
            header("location:../logIn.php?error=emptyinput");
            exit();
        }

    loginUser($con,$email,$pwd);

    
     }
     else{
        header("location:../logIn.php");
        exit();
     }