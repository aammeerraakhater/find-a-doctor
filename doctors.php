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
<div class="row">
<?php
                global $con;
                $query="SELECT * FROM doctor";
                $d = $con -> query ($query);
                foreach ($d as $data ){
                    $id= (int) $data['id'];
                    ?>
                    <div class="card col-3-lg col-3-sm col-12-xs" >
                    <img src="images\222049666_1454676671575946_2422978704607645790_n.jpg" class="card-img-top" alt="doctor page">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $data['name'];?> </h5>
                        <p class="card-text"> Specialization: <?php echo $data['specialization']; ?></p>
                        <p class="card-text"> PHD: <?php echo $data['PHD']; ?></p>
                        <p class="card-text">Government: <?php echo $data['government']; ?></p>
                        <a href="doctor.php?id=<?php echo $id;?> " class="btn gobtn" >View doctor</a>
                    </div>
                    </div>

                <?php
                }
                ?>
                </div>
<?php include "footercontainer.php";?>
<?php include "include/container/footer.php";?>
