<?php 
include_once 'class.user.php';
$user = new User();
// Checking for user logged in or not
    /*if (!$user->get_session())
    {
       header("location:index.php");
    }*/
if (isset($_POST['submit'])){
        extract($_POST);
        $register = $user->reg_user($fname,$lname,$password,$email);
        if ($register) {
            // Registration Success
            echo "<div style='text-align:center'>Registration successful <a href='Log_In_Page.php'>Click here</a> to login</div>";
        } else {
            // Registration Failed
            echo "<div style='text-align:center'>Registration failed. Email or Username already exits please try again.</div>";
        }
    }
?>

<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REGISTER PAGE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script  type="text/javascript "src= "services_validate.js"></script>
	<!-- jQuery library -->
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
    
    <!-- Register.js to validate the Register home page -->
    <script type="text/javascript" src="Register.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script>


	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

  	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

  	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

  	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  	<!-- CSS STYLESHEET LINK -->

	<link rel="stylesheet" type="text/css" href="style.css">


  	<link href="css/agency.min.css" rel="stylesheet" type="text/css">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



</head>
<body>
	<div class="FLEG5">
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
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signin" action="" method="post" name="reg">
              <div class="form-label-group">
                FirstName<input type="text" id="inputUserame" name="fname" class="form-control" placeholder="First Name" onkeyup="validateForm()"required autofocus>
              </div>
              <div class="form-label-group">
                LastName<input type="text" id="inputLastName" name="lname" class="form-control" placeholder="Last Name" onkeyup="validateLName()"required autofocus>
              </div>

              <div class="form-label-group">
                Email Address<input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required>
              </div>
              
              <hr>

              <div class="form-label-group">
                Password<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password"  required>
                  <meter max="4" id="password-strength"></meter>
                                <p id="password-strength-text"></p>
                  <!--check password strength-->
                <script>
                                 var strength = {
                                        0: "Weakest",
                                        1: "Weak",
                                        2: "OK",
                                        3: "Good",
                                        4: "Strong"
                                    }

                                    var password = document.getElementById('inputPassword');
                                    var meter = document.getElementById('password-strength');
                                    var text = document.getElementById('password-strength-text');

                                    password.addEventListener('input', function() {
                                        var val = password.value;
                                        var result = zxcvbn(val);

                                        // This updates the password strength meter
                                        meter.value = result.score;

                                        // This updates the password meter text
                                        if (val !== "") {
                                            text.innerHTML = "Password Strength: " + strength[result.score];
                                        } else {
                                            text.innerHTML = "";
                                        }
                                    });
                                </script>
              </div>
              
              <div class="form-label-group">
                Confirm password<input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit"onclick="validate()">Register</button>
              <a href="Log_In_Page.php">Do you have an account? Then click to <span class="blink-one"><b>Sign In</b></span></a>
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
