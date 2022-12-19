<?php
    include '../connect_db.php';
    if(isset($_POST['id'])){
        $id=$_POST['id'];
        $stmt = $con->prepare('DELETE FROM doctor WHERE id=?');
        $stmt->execute(array( $id));
        header("location:logOut.inc.php");
        header("Refresh:1;url=../home.php");
    }
    else {
        echo"Couldn't remove";
        header("Refresh:100;url=../home.php");

    }
