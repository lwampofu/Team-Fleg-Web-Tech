<?php 
//THIS CODE INCLUDES FUNCTIONALITES AND CLASSES FROM 'class.service.php'
include_once("class.service.php");
//INSTANTIATING THE OBJECT "service" of the class Service
$service = new Service();
//CHECKS IF THE SUBMIT BUTTON IS CLICKED, THEN IT TAKES INTO ACCOUNT FORM DETAILS AND BOOKS A USER FOR CARWASH
if (isset($_POST['submit'])) {
    extract($_POST);
    $car_wash_service=$service->car_wash($fname,$lname,$email,$choose,$Phone_num,$Full_address);
    if ($car_wash_service) {
        // Booking Success!
        echo "<div style='text-align:center'>Booking Recorded!</div>";
    }
    else {
        // Booking Failed!
        echo "<div style='text-align:center'>Please complete all fields!</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CARWASH PAGE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<!-- jQuery library -->
 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 


	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <script src="validate_service.js"></script>


  <!-- Javascript validation for checking if the contact provided by the user is 10 digits -->
  <script type="text/javascript">
    function validate(){
      var contact = document.getElementById("inputNumber").value;
      var checkLength = contact.toString().length;
      if(checkLength>10 ||checkLength<10){
        alert("Contact should have 10 digits!");
        return false
      }
      else{
        return true
      }
    }
  </script>

    <!-- CSS STYLESHEET LINK -->

  	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

  	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

  	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

  	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="style.css">


  	<link href="css/agency.min.css" rel="stylesheet" type="text/css">
	
</head>
<body>
  <!-- Creation of div class for the navigation bar and image of the carwash page-->
	<div class="FLEG6">
		<nav class="navbar navbar-expand-md bg-dark navbar-dark" id="mainNav">
      <div class="container">
        <ul class="navbar-nav">
          <a class = "navbar-brand" href="#"><img src = "img/folder/pic_4.png"></a>
        </ul>
        <ul class= "navbar-nav">
          <font color="yellow"><h5><li class="text-warning font-weight-bold">City Mobile Car Wash and Auto-Detailing Service</li></h5></font>
        </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target = "#collapsenavbar">
          <span class="navbar-toggler-icon"></span> 
        </button>
        <div class="collapse navbar-collapse text-center" id="collapsenavbar">

          <ul class="navbar-nav  ml-auto">
            <li class="nav-item active">
              <a href="HOME_PAGE.php" class="nav-link">HOME</a> 
            </li>
            <li class="nav-item active">
              <a href="ABOUT_US_PAGE.php" class="nav-link">ABOUT US</a> 
            </li>
            <li class="nav-item active">
              <a href="SERVICES.php" class="nav-link">SERVICES</a> 
            </li>
            <li class="nav-item active">
              <a href="Register.php" class="nav-link">SIGN UP</a> 
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- div class containg a form that initiates Car washing booking -->
    <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <span class="blink-one"><h5 class="card-title text-center">CAR WASH BOOKING</h5></span>
            <form class="form-signin" action="" method="post" name="car_wash">
              <div class="form-label-group">
               First Name <input type="text" id="inputFirstname" class="form-control" name="fname" placeholder="Firstname" onkeyup="validateForm()"required autofocus>
              </div>
              
              <hr>

              <div class="form-label-group">
                Last Name<input type="text" id="inputLastname" class="form-control" name="lname" placeholder="Lastname" onkeyup="validateLName()"required autofocus>
              </div>

              <div class="form-label-group">
                Email Address<input type="text" id="inputEmail" class="form-control" name="email" placeholder="Email" onkeyup="validateEmail()"required autofocus>
                
              </div>

              <div class="form-label-group">
                Phone Number<input type="tel" id="inputNumber" class="form-control" name="Phone_num" placeholder="Phone Number" required>
              
              </div>
              
              <div class="form-label-group">
               Home Address<input type="text" id="inputLocation" name="Full_address" class="form-control" placeholder="Home Address" required>
              </div>
               

              <div class="form-label-group">
                <b>Please select your choice of service?</b><br>

                <br>
                <select name="choose"> 
                  <option value="INTERIOR AND EXTERIOR CAR WASH: GHS20.00">INTERIOR AND EXTERIOR CAR WASH: GHS20.00</option><br>
                  <option value="WASH ADDONS: GHS60.00">WASH ADDONS: GHS60.00</option><br>
                  <option value="BOTH: GHS80.00">BOTH: GHS80.00</option><br>
                </select><br>
              </div>

              <input class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit" onClick = "validate()" value="SUBMIT BOOKING"><br>
              <br>

              <center><a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="SERVICES.php">PREVIOUS PAGE</a></center>
            </form>
          </div>
        </div>
      </div>
    </div>
 	</div>
	</div>
  <!-- THIS PORTION IS THE FOOTER -->
	<footer class="footer">
      <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <b><span class="copyright">Copyright &copy;City Mobile Car Wash and Auto- Detailing (CMCW) 2019</span></b>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <b><a href="#">Privacy Policy</a></b>
            </li>
            <li class="list-inline-item">
              <b><a href="#">Terms of Use</a></b>
            </li>
          </ul>
        </div>
      </div>
    </div> 
    </footer>
</body>
</html>