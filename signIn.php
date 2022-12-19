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
    if($_GET["error"]=="emptyInput"){
      echo '<div class="alert alert-info" role="alert">
      Please fill all fields
    </div>';
    }
    else if($_GET["error"]=="invalidName"){
      echo '<div class="alert alert-info" role="alert">
      Invalid name only small and capital letters are allowed
    </div>';
      }
    else if($_GET["error"]=="differentPassword"){
      echo '<div class="alert alert-info" role="alert">
      Different password    </div>'; 
    }
 
}
?>

<div>
<form class="Bgform-group loginBgform-group"  action="include/signin.inc.php"method="POST">

  <div class="form-group ">
  <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" >
  </div>


  <div class="form-group ">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp"  class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">Phone</label>
    <input type="tel" name="phone" class="form-control" id="exampleInputEmail1" >
  </div>

<div class="row form-group ">
  <label for="exampleInputEmail1">Medical specialization</label>
  <div class="row medicalSpecialization">
  <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios1" value="Anatomy" checked>
      <label class="form-check-label" for="exampleRadios1">
      Anatomy
      </label>
    </div>

    <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="Anesthesia">
      <label class="form-check-label" for="exampleRadios2">
      Anesthesia
      </label>
    </div>
      <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="Cardiology">
      <label class="form-check-label" for="exampleRadios2">
      Cardiology
      </label>
    </div>
      <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="Dentistry">
      <label class="form-check-label" for="exampleRadios2">
      Dentistry
      </label>
    </div>
      <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="Dermatology">
      <label class="form-check-label" for="exampleRadios2">
      Dermatology
      </label>
    </div>
      <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="ENT">
      <label class="form-check-label" for="exampleRadios2">
      Ear, nose and throat (ENT)
      </label>
    </div>
    <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="Endocrinology">
      <label class="form-check-label" for="exampleRadios2">
      Endocrinology  </label>
    </div>
    <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="Gastroenterology">
      <label class="form-check-label" for="exampleRadios2">
      Gastroenterology  </label>
    </div>
    <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="GeneralSurgery">
      <label class="form-check-label" for="exampleRadios2">
      General surgery  </label>
    </div>
    <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="InternalMedicine">
      <label class="form-check-label" for="exampleRadios2">
      Internal Medicine  </label>
    </div>
    <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="Hematology">
      <label class="form-check-label" for="exampleRadios2">
      Hematology  </label>
    </div>
    <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="Nephrology">
      <label class="form-check-label" for="exampleRadios2">
      Nephrology  </label>
    </div>
    <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="Hepatology">
      <label class="form-check-label" for="exampleRadios2">
      Hepatology  </label>
    </div>
    <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="Neurology">
      <label class="form-check-label" for="exampleRadios2">
      Neurology  </label>
    </div>
    <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="ObstetricsAndGynecology">
      <label class="form-check-label" for="exampleRadios2">
      Obstetrics and Gynecology  </label>
    </div>
    <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="Oncology">
      <label class="form-check-label" for="exampleRadios2">
      Oncology  </label>
    </div>
    <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="Ophthalmology">
      <label class="form-check-label" for="exampleRadios2">
      Ophthalmology  </label>
    </div>
    <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="Orthopedics">
      <label class="form-check-label" for="exampleRadios2">
      Orthopedics  </label>
    </div>
    <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="Ophthalmology">
      <label class="form-check-label" for="exampleRadios2">
      Ophthalmology  </label>
    </div>
    <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="Pediatrics">
      <label class="form-check-label" for="exampleRadios2">
      Pediatrics  </label>
    </div>
    <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="Ophthalmology">
      <label class="form-check-label" for="exampleRadios2">
      Ophthalmology  </label>
    </div>
    <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="PlasticSurgery">
      <label class="form-check-label" for="exampleRadios2">
      Plastic surgery  </label>
    </div>
    <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="Psychiatry">
      <label class="form-check-label" for="exampleRadios2">
      Psychiatry  </label>
    </div>
    <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="Rheumatology">
      <label class="form-check-label" for="exampleRadios2">
      Rheumatology  </label>
    </div>
    <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="Urology">
      <label class="form-check-label" for="exampleRadios2">
      Urology  </label>
    </div>
    <div class="form-check col-md-3 col-xs-6">
      <input class="form-check-input" type="radio" name="medicine" id="exampleRadios2" value="VeterinaryMedicine">
      <label class="form-check-label" for="exampleRadios2">
      Veterinary medicine  </label>
    </div>
  </div>

</div>
  <div class="form-group ">
    <label for="exampleInputPassword1">Price</label>
    <input type="number" name="price" class="form-control" id="exampleInputPassword1">
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
    <input type="txt" name="address" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="form-group ">
    <label for="exampleInputPassword1">PHD</label>
    <input type="txt" name="PHD" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="form-group ">
    <label for="exampleInputPassword1">password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="form-group ">
    <label for="exampleInputPassword1">Password repeat</label>
    <input type="password" name="passwordRepeat" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" name="submit" class="btn submit-btn">Sign in</button>
</form>
</div>

</div>

<?php include "footercontainer.php";?>
<?php include "include/container/footer.php";

