<?php
               # include_once "container/header.php";
                #include_once "container/footer.php";
        #include "../connect_db.php";
    function emptyInputSignin($name ,$email,$phone,$password,$passwordRepeat){
        $resault;
        if(empty($name)||empty($email)||empty($phone)||empty($password)||empty($passwordRepeat)){
            $resault=true;
        }
        else{
            $resault=false;
        }
        return $resault;
    }

    function validName($name){
        if(!preg_match("/[a-zA-Z0-9]/", $name)){
            $resault=true;
        }
        else{
            $resault=false;
        }
        return $resault;
    }

    function validEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $resault=true;
        }
        else{
            $resault=false;
        }
        return $resault;
    }

    function validPasswordRepeat($password,$passwordRepeat){
        if($password!==$passwordRepeat){
            $resault=true;
        }
        else{
            $resault=false;
        }
        return $resault;
    }

    function createUser($con,$name ,$email,$phone,$password,$specialization,$price,$government,$Address,$PHD){
        global $con;
        $stmt = $con->prepare( " INSERT INTO doctor(name,email,phone,password,specialization,price,government,Address,PHD) Value(:name,:email,:phone,:password,:specialization,:price,:government,:Address,:PHD)");
        $stmt->execute(
            array(
                ":name" => $name,
                ":email"=> $email,
                ":phone"    => $phone,
                ":password" => $password,
                ":specialization"=>$specialization,
                ":price"=>$price,
                ":government"=>$government,
                ":Address"=>$Address,
                ":PHD"=>$PHD,
            )
            );
            echo "<p> Great , user has been successfully added </p>";
        }

        function isEmptyLogin($email,$pwd){
            $resault;
            if(empty($email)||empty($pwd)){
                $resault=true;
            }
            else{
                $resault=false;
            }
            return $resault;
            }

            function loginUser($con,$email,$pwd){
                global $con;
                $stmt = $con-> prepare("SELECT * FROM doctor WHERE email = ?");
                $stmt->execute(array($email));
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);
                $count = $stmt->rowCount();
                if($count){
                    if(password_verify($pwd,$rows['password'])){
                        @session_start();//nessecary 
                        $_SESSION['id']=$rows['id'];
                        $_SESSION['name']=$rows['name'];
                        $_SESSION['email']=$rows['email'];
                        $_SESSION['phone']=$rows['phone'];
                        $_SESSION['specialization']=$rows['specialization'];
                        $_SESSION['price']=$rows['price'];
                        $_SESSION['government']=$rows['government'];
                        $_SESSION['Address']=$rows['Address'];
                        $_SESSION['PHD']=$rows['PHD'];

                        header("Refresh:1;url=../home.php");
                        echo"Welcome to Find doctor ";
                    }
                else{
                    header("location:../logIn.php?error=notfound");
                }

            }
            else{
                header("location:../logIn.php?error=notfound");
            }

            function Showdoctor($con,$id){
                global $con;
                $stmt = $con-> prepare("SELECT * FROM doctor WHERE id = ?");
                $stmt->execute(array($id));
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);
                $count = $stmt->rowCount();
                if($count){
                        $id=$rows['id'];
                        $name=$rows['name'];
                        $email=$rows['email'];
                        $phone=$rows['phone'];
                        $specialization=$rows['specialization'];
                        $price=$rows['price'];
                        $government=$rows['government'];
                        $Address=$rows['Address'];
                        $PHD=$rows['PHD'];
?>
                        <div class="card col-3-lg col-3-sm col-12-xs" >
                        <img src="images\222049666_1454676671575946_2422978704607645790_n.jpg" class="card-img-top" alt="doctor page">
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $name;?> </h5>
                            <p class="card-text"> Phone number: <?php echo $phone; ?></p>
                            <p class="card-text"> Email: <?php echo $email; ?></p>
                            <p class="card-text"> Specialization: <?php echo $specialization; ?></p>
                            <p class="card-text"> price : <?php echo $price; ?></p>
                            <p class="card-text"> PHD: <?php echo $PHD; ?></p>
                            <p class="card-text">Government: <?php echo $government; ?></p>
                            <a href="doctor.php?id=<?php echo $id;?> " class="btn gobtn" >View doctor</a>
                        </div>
                        <?php
                        }

                else{
                echo "Sorry doctor not found.";
                header("location:../doctors.php");
            }}}

             function doctorsSearch($con,$specialization,$government){
                global $con;
                $query=("SELECT * FROM doctor WHERE specialization = ? AND government=?");
                $d = $con -> query ($query);
                foreach ($d as $data ){
                    ?>
                    <div class="card col-3-lg col-3-sm col-12-xs" >
                    <img src="images\222049666_1454676671575946_2422978704607645790_n.jpg" class="card-img-top" alt="doctor page">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $data['name'];?> </h5>
                        <p class="card-text"> Phone number: <?php echo $data['phone']; ?></p>
                        <p class="card-text"> Email: <?php echo $data['email']; ?></p>
                        <p class="card-text"> Specialization: <?php echo $data['specialization']; ?></p>
                        <p class="card-text"> price : <?php echo $data['price']; ?></p>
                        <p class="card-text"> PHD: <?php echo $data['PHD']; ?></p>
                        <p class="card-text">Government: <?php echo $data['government']; ?></p>
                        <a href="doctor.php?id=' . <?php echo $id;?> . '" class="btn gobtn" >View doctor</a>
                    </div>
                    </div>

                <?php
                }
            }
            function editUser($con,$id,$email,$phone,$price,$government,$address){
                global $con;
                $query ='UPDATE doctor SET email=?, phone=?, price=?,government=?, address=? WHERE id=?';  
                $stmt=$con -> prepare($query);
                $stmt->execute([$email, $phone,$price,$government,$address,$id]);
                header('logOut.inc.php');
            }

