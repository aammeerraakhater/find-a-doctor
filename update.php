<?php
    include "include/container/header.php";
    include "connect_db.php";
    ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin:wght@500;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="layout/css/style.css">
<link rel="stylesheet" href="layout/css/master.css">

</head>
<body>
  <?php include "navbar.php"; ?>
  <?php
      if(isset($_GET["error"])){
        if($_GET["error"]=="empty"){
          echo '<div class="alert alert-info" role="alert">
          Please fill all fields
        </div>';
        }}

    
     if(isset($_POST['id'])){
        $id=$_POST['id'];
        global $con;
        $stmt = $con-> prepare("SELECT * FROM doctor WHERE id = ?");
        $stmt->execute(array($id));
        $rows = $stmt->fetch(PDO::FETCH_ASSOC);
        $count = $stmt->rowCount();
        if($count){
                $email=$rows['email'];
                $phone=$rows['phone'];
                $price=$rows['price'];
                $government=$rows['government'];
                $address=$rows['Address'];
        }

        ?>
        <form class="Bgform-group loginBgform-group"  action="include/update.inc.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $id ?>">

        <div class="form-group ">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" value="<?php echo  $email ?>"name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp"  class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
      
        <div class="form-group ">
          <label for="exampleInputEmail1">Phone</label>
          <input type="tel" name="phone" value="<?php echo $phone?>" class="form-control" id="exampleInputEmail1" >
        </div>
      
      
        <div class="form-group ">
          <label for="exampleInputPassword1">Price</label>
          <input type="number" name="price" value="<?php echo $price?>" class="form-control" id="exampleInputPassword1">
        </div>
      
      <div class="form-group ">
        <select name="government" class="form-control">
          <option name="government" value="benha">Benha</option>
          <option  name="government" value="toukh">Toukh</option>
          <option name="government" value="cairo">Cairo</option>
          <option name="government" value="alexandria">Alexandria</option>
          <option name="government" value="aswan">Aswan</option>
          <option name="government" value="giza">Giza</option>
          <option name="government" value="ismailia">ismailia</option>
          <option name="government" value="luxor">Luxor</option>
          <option name="government" value="Matruh">Matruh</option>
          </select>
      </div>
        <div class="form-group ">
          <label for="exampleInputPassword1">Address</label>
          <input type="txt" name="address" value="<?php echo $address?>" class="form-control" id="exampleInputPassword1">
        </div>
      

        <button type="submit" name="submit" class="btn submit-btn">Update</button>
      </form>
      </div>
      <?php
    }

  
 ?>

<?php include "footercontainer.php";?>
<?php include "include/container/footer.php";

