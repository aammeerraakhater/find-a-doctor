<?php 
include "include/container/header.php";?>
<!-- <link rel="stylesheet" href="layout/css/home.css"> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin:wght@500;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="layout/css/master.css">

</head>
<body>
<?php include "navbar.php";?>
<div class="headerimg">
</div>
<section>
        <div class="c1" >
            <div class="headerbox">
                <div class="section-bg-box">
                    <h1 class="animated slideInLeft">Health Care Services</h1>
                    <h2 class="animated slideInRight">We Care About Your Health</h2>
                </div>
            </div>
            <br>

<div class="jumbotron">
<form action="doctorsSearch.php" method="POST">
  <h1 class="display-4 bigheader">Choose your doctor!</h1>
  <p class="lead">In Find doctor we are trying to help you get your doctor, wishing you health and happiness</p>
  <hr class="my-4">
<select name="specialization"class="form-control">
    <option value="Anatomy">Anatomy</option>
    <option value="Anesthesia">Anesthesia</option>
    <option value="Cardiology">Cardiology</option>
    <option value="Dentistry">Dentistry </option>
    <option value="Dermatology">Dermatology</option>
    <option value="ENT">Ear, nose and throat (ENT)</option>
    <option value="Endocrinology">Endocrinology</option>
    <option value="Gastroenterology">Gastroenterology</option>
    <option value="GeneralSurgery">General surgery</option>
    <option value="InternalMedicine">Internal medicine</option>
    <option value="Hematology">Hematology</option>
    <option value="Nephrology">Nephrology</option>
    <option value="Hepatology">Hepatology</option>
    <option value="Neurology">Neurology</option>
    <option value="ObstetricsAndGynecology">ObstetricsAndGynecology</option>
    <option value="Oncology">Oncology</option>
    <option value="Ophthalmology">Ophthalmology</option>
    <option value="Orthopedics">Orthopedics</option>
    <option value="Ophthalmology">Ophthalmology</option>
    <option value="PlasticSurgery">Plastic surgery</option>
    <option value="Psychiatry">Psychiatry</option>
    <option value="Rheumatology">Rheumatology</option>
    <option value="Urology">Urology</option>
    <option value="VeterinaryMedicine">Veterinary Medicine</option>
    </select>
    <hr class="my-4">
    <select name="government"class="form-control">
    <option value="benha">Benha</option>
    <option value="toukh">Toukh</option>
    <option value="cairo">Cairo</option>
    <option value="alexandria">Alexandria</option>
    <option value="aswan">Aswan</option>
    <option value="giza">Giza</option>
    <option value="ismailia">ismailia</option>
    <option value="luxor">Luxor</option>
    <option value="Matruh">Matruh</option>
    </select>
    <hr class="my-4">
  <button type="submit" name="submit" class="btn submit-btn searchbtn btn-lg"  > Search </button>
  </form>
</div>
            <br>
            <h1 class="welcome-text">WELCOME TO HOSPITAL SERVICE</h1>
            <br>
            <div class="innerbody">
            <p class="innerPara">
                we want to help you experience a lifetime of good health. Our association has good ,qualified doctors who care about your health.
                We are doing our best to provide you the best way to meet your  medical needs.
            </p>
            </div>
            <br>            
            <h1 class="welcome-text">OUR OUTSTANDING SERVICES</h1>
            <br>
            <div class="innerbody">
            <h3>What We Offer!</h3>
            <p class="innerPara">Medical care by providing all doctors near you.</p>
            <p class="innerPara">Best Medical And Health care Needs to Our Patients</p>
            </div>
            </div>
        </div>
    </section>
<?php include "footercontainer.php";?>
<?php include "include/container/footer.php";?>
