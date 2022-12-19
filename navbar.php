<?php include "include/container/header.php";?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
<link rel="stylesheet" href="layout/css/navbar.css">
</head>
<body>


<nav class="navbar navbar-expand-md navbar-dark ">
  <a class="navbar-brand" href="home.php">Find doctor</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="about-us.php">About us <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="doctors.php">Doctors</span></a>
      </li>

      <?php
      if(isset($_SESSION['name'])){
        @session_start();
        $userName= $_SESSION['name'];
        echo'
          <li class="nav-item active">
          <a class="nav-link" href="user_profile.php"> '
          .$userName;
          ?>
          <?php
          echo"'s Profile Page </a>
          </li>";
        echo" 
          <li class='nav-item active'>
            <a class='nav-link' href='include/logOut.inc.php'>log out </a>
          </li>";

      }
      else{
        echo' <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Are you a doctor 
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="signIn.php">Sign in</a>
          <a class="dropdown-item" href="logIn.php">log in </a>
        </div>
      </div>';
      }
      
      ?>
    </ul>
  </div>
</nav>
