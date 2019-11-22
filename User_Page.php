<?php
include_once('class.user.php');
 // Initialize the session
session_start();

/* Check if the user is logged in, if not then redirect him to login page*/
if(!isset($_SESSION["login"]) || $_SESSION["login"] !==true) {
    header("location: Log_In_Page.php");
    exit;
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>USER PAGE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>USERS PAGE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<!-- jQuery library -->
 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

  	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

  	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

  	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

  	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  	<!-- CSS STYLESHEET LINK -->

	<link rel="stylesheet" type="text/css" href="style.css">


  	<link href="css/agency.min.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="ajaxsearch.js"></script>


</head>
<body>
	<div class="FLEG10">
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
              <a href="ajax_page.php" class="nav-link">EMPLOYEES</a> 
            </li>
            <li class="nav-item active">
              <a href="changepass.php" class="nav-link">CHANGE PASSWORD</a> 
            </li>
            <li class="nav-item active">
              <a href="users_logout.php" class="nav-link">LOG OUT</a> 
            </li>

          </ul>
        </div>
      </div>

    </nav>
    <div id="slides" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li> 
      </ul>
    <div class="carousel-inner">
      <div class = "carousel-item active">
        <img src="img/folder/user4.jpg" width="1400px" heigth="500px">
        <div class = "carousel-caption">
          <span class="blink-one"><a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="#services">WELCOME OUR CHERISHED CUSTOMERS</a></span><br>
          <br>
          <a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="#PROMOTIONS">PROMOTIONS</a>
        <a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="#UPDATES">SEE UPDATES ON PRODUCTS</a>
        </div>
      </div>
      <div class = "carousel-item">
        <img src="img/folder/user5.jpg" width="1400px">
        <div class = "carousel-caption">
          <span class="blink-one"><a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="#services">WELCOME OUR CHERISHED CUSTOMERS</a></span><br>
          <br>
          <a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="#PROMOTIONS">PROMOTIONS</a>
        <a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="#UPDATES">SEE UPDATES ON PRODUCTS</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/folder/user6.jpg" width="1450px" height="600px">
      <div class = "carousel-caption">
        <span class="blink-one"><a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="#services">WELCOME OUR CHERISHED CUSTOMERS</a></span><br>
        <br>
        <a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="#PROMOTIONS"> PROMOTIONS</a>
        <a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="#UPDATES">SEE UPDATES ON PRODUCTS</a>
      </div>
    </div> 
  </div>
</div>
		 
</div>
<section class="page-section" id="SERVICES">
	<div class="container">
		<div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">PROMOTIONS</h2>
          <span class="blink-one"><h2 class="section-subheading text-muted">STAY IN TOUCH ON UPDATES ON PROMOTIONS</h2></span>
        </div>
      </div>
	</div>
	
</section>
<section class="page-section" id="UPDATES">
  <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">SEE OUR UPDATES</h2>
          <span class="blink-one"><h2 class="section-subheading text-muted">CAR WASH AND DETAIL PRODUCTS</h2></span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
              </div>
            </div>
            <a href="Car_Detailing.php"><img class="img-fluid" src="CARWASH.png" alt=""></a>
          <div class="portfolio-caption">
            <span class="blink-one"><h4>CITRUS WASH & GLOSS</h4></span>
            <span class="blink-one"><h4>PRICE:GHS 146.56</h4></span>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
              </div>
            </div>
            <a href="Carwash_Page.php"><img class="img-fluid" src="CARDETAILING.jpg" alt=""></a>
          <div class="portfolio-caption">
            <span class="blink-one"><h4>ADAM'S CAR SHAMPOO</h4></span>
            <span class="blink-one"><h4>PRICE:GHS 207.64</h4></span>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
              </div>
            </div>
            <a href="PRODUCTS.php"><img class="img-fluid" src="CARWASHIMAGE3.jpg" alt=""></a>
          <div class="portfolio-caption">
            <span class="blink-one"><h4>TURTILE WAX CAR WASH</h4></span>
            <span class="blink-one"><h4>PRICE:GHS 54.25 </h4></span>
          </div>
        </div>
      </div>
    </div> 

  </div>
  
</section>
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