<?php include "connect_db.php";?>
<?php include "include/container/header.php";?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin:wght@500;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="layout/css/user-profile.css">
</head>
<body>
<?php include "navbar.php";?>
<div class="bigcontainer">
    <div class="container">
      <div class="image">

      </div>
      <div class="txt">
          <?php
          @session_start();
      if(isset($_SESSION['name'])){
        $id= $_SESSION['id'];
        $Name= $_SESSION['name'];
        $email= $_SESSION['email'];
        $phone= $_SESSION['phone'];
        $specialization= $_SESSION['specialization'];
        $price= $_SESSION['price'];
        $address= $_SESSION['Address'];
        $government= $_SESSION['government'];
        $PHD= $_SESSION['PHD'];
      }?>

<h1><?php echo $Name ; ?></h1> 
     <p> My email :
        <?php echo $email ; ?>
        </p>
        <p>specialization :
        <?php echo $specialization ; ?>
        </p>
        <p>price:<?php echo $price;?> <p>
        <p>Address: <?php echo $address;?> <p>
        <p>Government: <?php echo $government;?> <p>
        <p>PHD:<?php echo $PHD;?> <p>
      </div>
      <div class="plan">
        <div class="fix">
        <div class="icon">

        </div>
        <div class="txt">
         <div> My phone :</div>
         <div><?php echo $phone ; ?></div> 
        </div>
        </div>
      </div>

    <form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <div class="proceesbtn" >
    <button class="btn " type="submit" value="update" name="update">Edit information</button>
    </div>
    </form>

    <form action="include/deleteDoctor.inc.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <div class="cancelbtn" >
    <button class="btn btn-danger" type="submit" value="delete" name="submit">Delete</button>
    </div>
   </form>
    </div>
    </div>

<?php include "footercontainer.php";?>
<?php include "include/container/footer.php";?>


