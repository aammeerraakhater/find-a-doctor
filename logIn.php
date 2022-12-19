<?php include "init.php";?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin:wght@500;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="layout/css/style.css">
</head>
<body>
  <?php
  if(isset($_GET["error"])){
    if($_GET["error"]=="emptyinput"){
      echo '<div class="alert alert-info" role="alert"> Please fill all fields </div>';
    }
    if ($_GET["error"]=="notfound") {
      echo '<div class="alert alert-info" role="alert"> Sorry Your Email OR Password is not Correct.</div>';

    }
  }
  ?>

  <form class="Bgform-group loginBgform-group " action="include/login.inc.php" method="POST">

<div class="form-group ">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Enter your email address</small>
  </div>
  <div class="form-group ">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit " name="submit" class="btn submit-btn ">Log in</button>
</form>
<?php
 include "footercontainer.php";?>

