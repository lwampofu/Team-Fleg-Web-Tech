<?php 

include_once("class.service.php");
$service = new Service();
if (isset($_POST['submit'])) {
    extract($_POST);
    $car_products=$service->products($fname,$lname,$email,$choose,$Phone_num,$Full_address);
    if ($car_products) {
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
	<title>PRODUCTS PAGE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<!-- jQuery library -->
 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 


	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

  	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

  	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

  	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  	<!-- CSS STYLESHEET LINK -->

	<link rel="stylesheet" type="text/css" href="style.css">


  	<link href="css/agency.min.css" rel="stylesheet" type="text/css">

    <script src="validate_service.js"></script>

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

</head>
<body>
	<div class="FLEG8">
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
    <div class="container">
    	<div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <span class="blink-one"><h5 class="card-title text-center">PURCHASE OF CAR WASH PRODUCTS</h5></span>
            <form class="form-signin" action="" method="post" name="products">
              <div class="form-label-group">
                First Name<input type="text" id="inputFirstname" class="form-control" name="fname" placeholder="Firstname" onkeyup="validateForm()"required autofocus>
              </div>
              
              <div class="form-label-group">
                Last Name<input type="text" id="inputLastname" class="form-control" name="lname" placeholder="Lastname" onkeyup="validateLName()" required autofocus>
              </div>

              <div class="form-label-group">
                Email Address<input type="text" id="inputEmail" class="form-control" name="email" placeholder="Email Address" onkeyup="validateEmail()" required autofocus>
              </div>

              <div class="form-label-group">
                Phone Number<input type="number" id="inputNumber" class="form-control" name="Phone_num" placeholder="Phone Number" required>
              </div>
              
              <div class="form-label-group">
                Home Address<input type="text" id="inputLocation" class="form-control" name="Full_address" placeholder="Location" required>
              </div>

              <div class="form-label-group" >
                <b>Please check the products you prefer to purchase from CMCW</b><br>
                <font color="blue"><input type="checkbox" name="choose" value="Citrus Wash & Gloss: GHS146.56">Citrus Wash&Gloss:GHS146.56<a href="CARWASH_IMAGE.php"><p style="color:red">(SEE IMAGE)</p></a>
                <input type="checkbox" name="choose" value="Adams Car Shampoo: GHS207.64 ">Adam's Car Shampoo: GHS207.64<a href="CARDETAIL_IMAGE.php"><p style="color:red">(SEE IMAGE)</p></a>
                
                <input type="checkbox" name="choose" value="Turtlle Wax Car Wash: GHS54.25">Turtile Wax Car Wash: GHS54.25<a href="CARWASHIMAGE3.php"><p style="color:red">(SEE IMAGE)</p></a><br></font>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit" onclick="validate()">SUBMIT PURCHASE</button>
              
              <hr class="my-4">
              <center><a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="SERVICES.php">PREVIOUS PAGE</a></center>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
		
	</div>
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