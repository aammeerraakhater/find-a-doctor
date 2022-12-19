<?php
    include "include/container/header.php";
    include "include/function.php";
    include "connect_db.php";
    include "navbar.php"
    ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin:wght@500;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="layout/css/doctor.css">

<?php
  if(isset($_GET["id"])){
    $id= $_GET["id"];
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
            <div class="card showdoctorcard" >
            <img src="images\222049666_1454676671575946_2422978704607645790_n.jpg" class="card-img-top" alt="doctor page">
            <div class="card-body">
            <h5 class="card-title"><?php echo $name;?> </h5>
                <p class="card-text"> Phone number: <?php echo $phone; ?></p>
                <p class="card-text"> Email: <?php echo $email; ?></p>
                <p class="card-text"> Specialization: <?php echo $specialization; ?></p>
                <p class="card-text"> price : <?php echo $price; ?></p>
                <p class="card-text"> PHD: <?php echo $PHD; ?></p>
                <p class="card-text">Government: <?php echo $government; ?></p>
            </div>
    </div>
            <?php
            }

}else {
  echo"sorry something went wrong";
}
 include "footercontainer.php";
 include "include/container/footer.php";
