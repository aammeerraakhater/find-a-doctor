<?php
    require_once '../connect_db.php';
    require_once 'function.php';
    if(isset($_POST["submit"])){
        $id=$_POST["id"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $price=$_POST["price"];
        $government=$_POST["government"];
        $address=$_POST["address"];
        
        if (empty($id)||empty($email)||empty($phone)||empty($price)||empty($government)||empty($address)) {
            header("location:../update.php?error=empty");
        }
        else{
        editUser($con,$id,$email,$phone,$price,$government,$address);
        header("location:logOut.inc.php");
        
         }


        }
    else{
        echo "<p>Sorry something went on try again :)</p>";
    }

