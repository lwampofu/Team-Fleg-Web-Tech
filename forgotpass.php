<?php
/**
 * @author Team Fleg
 * @version 1.1.1
 * A class to handle services provided by City Mobile Car Washing Services
 */

include_once('class.user.php');
 // Initialize the session
session_start();

$user = new User();
if (isset($_POST['submit'])) { 
    extract($_POST); 
    //the object user takes into account email in the forgot password function  
      $user->forgotpass($email);
     /* if ($changepass) {
          // Password successfully changed
         header("location:Log_In_Page.php");

      } else {
          // Registration Failed
          echo 'Sorry! Please try again!';
        return false;
      }*/
  }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FORGOT PASSWORD PAGE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 


	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>


   <!-- CSS STYLESHEET LINK -->

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" type="text/css" href="style.css">


    <link href="css/agency.min.css" rel="stylesheet" type="text/css">


    <script type="text/javascript" src="Log_In_Page.js"></script>


</head>

<body class="FLEG4" >
	<div>
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
        </div>
      </div>
		</nav>
	</div>
   <!-- Form for the user to fill incase they forget their password -->
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">FORGOT PASSWORD</h5>
            <form class="form-signin" action="" method="post" name="submit">
              <div class="form-label-group">
               EMAIL ADDRESS<input type="email" id="inputEmail" name="email" class="form-control" placeholder="Enter Email Address" required autofocus> 
              </div>
              <hr class="my-4">
              <center><button class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" name="submit">SUBMIT</button></center><br>
              <br>
              <center><a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="Log_In_Page.php">CANCEL</a></center>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
   <!-- Footer section -->
  <footer class="footer">
  	<div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <b><span class="copyright">Copyright &copy; Case Scenario for City Mobile Car Wash and Auto- Detailing (CMCW) 2019</span></b>
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