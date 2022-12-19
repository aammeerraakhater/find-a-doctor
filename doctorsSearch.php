<?php include "include/container/header.php";?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin:wght@500;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="layout/css/doctors.css">
</head>
<body>
<?php include "navbar.php";?>
<?php include "include/function.php";?>
<?php include "connect_db.php";?>
<?php
    if(isset($_POST["submit"])){
        $specialization=$_POST["specialization"];
        $government=$_POST["government"];
        ?>
        <div class="row">
        <?php
        global $con;
        $query=$con->prepare("SELECT * FROM doctor WHERE specialization=? AND government=?");
        $query->execute(array($specialization, $government));
        $count=0;
        // $rows=$query->fetch(PDO::FETCH_ASSOC);
        while  ($rows=$query->fetch(PDO::FETCH_ASSOC)){
            ?>
            <div class="card col-3-lg col-3-sm col-12-xs" >
            <img src="images\222049666_1454676671575946_2422978704607645790_n.jpg" class="card-img-top" alt="doctor page">
            <div class="card-body">
            <h5 class="card-title"><?php echo $rows['name'];?>  </h5>
                <p class="card-text"> Phone number:<?php echo $rows['phone'];?> </p>
                <p class="card-text"> Email: <?php echo $rows['email'];?> </p>
                <p class="card-text"> Specialization: <?php echo $rows['specialization'];?> </p>
                <p class="card-text"> price :<?php echo $rows['price'];?> </p>
                <p class="card-text"> PHD: <?php echo $rows['PHD'];?>  </p>
                <p class="card-text">Government: <?php echo $rows['government'];?>  </p>
                <?php $count++;?>
            </div>
            </div>

        <?php
        }
        ?>
        </div>
        <?php
        if($count===0){
            ?>
            <div class="jumbotron mt-5 mb-5">
            <h1 class="display-4">Hello!</h1>
            <p class="lead">Hello we are sorry to inform you that the doctor we are looking for isn't a member of us yet.</p>
            <hr class="my-4">
            <p>you may look again latter thanks for being her</p>
            <!-- May go to contact us -->
                 <a class="btn  btn-success btn-lg" href="home.php" role="button">Back to home </a> 
            </div>
            <?php
        }
    }

 else {
    echo"something went wrong please try again";
}
    include "footercontainer.php";
    include "include/container/footer.php";
