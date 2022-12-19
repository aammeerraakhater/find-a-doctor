<?php
    if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $password=$_POST["password"];
        $passwordRepeat=$_POST["passwordRepeat"];
        $specialization=$_POST["medicine"];
        $government=$_POST["government"];
        $price=$_POST["price"];
        $address=$_POST["address"];
        $PHD=$_POST["PHD"];
        $hashedpassword= password_hash($password, PASSWORD_DEFAULT);
        $hashedpasswordRepeat= password_hash($passwordRepeat, PASSWORD_DEFAULT);

        require_once '../connect_db.php';
        require_once 'function.php';
        if(emptyInputSignin($name ,$email,$phone,$password,$passwordRepeat) !==false){
            header("location: ../signIn.php?error=emptyInput");
            exit();
        }
        if(validName($name) !==false){
            header("location: ../signIn.php?error=invalidName");
            exit();
        }
        if(validEmail($email) !==false){
            header("location: ../signIn.php?error=invalidEmail");
            exit();
        }
        if(validPasswordRepeat($password,$passwordRepeat) !==false){
            header("location: ../signIn.php?error=differentPassword");
            exit();
        }

        createUser($con,$name ,$email,$phone,$hashedpassword,$specialization,$price,$government,$address,$PHD);
        loginUser($con,$email,$password);

    }
    else{
        header("location: ../signIn.php");
        exit();
}
