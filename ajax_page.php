<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AJAX PAGE</title>

  <!-- MAX CDN boostrap link -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 


	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script type="text/javascript" src="Contact.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

  <script type="text/javascript" src="ajaxsearch.js"></script>



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

  <!-- Creation of a div class for the navigation bar and image  of the ajax page-->

	<div class="FLEG">

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
              <a href="changepass.php" class="nav-link">CHANGE PASSWORD</a> 
            </li>
            <li class="nav-item active">
              <a href="users_logout.php" class="nav-link">LOG OUT</a> 
            </li>

          </ul>
        </div>
        
      </div>

    </nav>

    <!-- A SUB SECTION ON THE PAGE ENABLING USERS TO NAVIGATE ON THIS VERY PAGE-->

    <div class="container text-center headerset">
     <span class="blink-one"> <a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="#DETAILS"> KNOW OUR EMPLOYEES</a></span>
    </div>
  </div>
  <!-- THIS SECTION CONTAINS A FORM THAT ALLOWS USERS TO ENTER "EMPLOYEE" AND THE AJAX FUNCTIONALITY ISSUES OUT ALL EMPLOYEES. IF NOT IT 
    ISSUES OUT "No record of employee"-->
<section class="page-section" id="DETAILS">
  <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-subheading text-muted">GET IN TOUCH WITH OUR EMPLOYEES</h2>
        </div>
      </div>
      <div style="margin: 0 auto; text-align: center; padding-top: 10%; font-size: 20px;">
        <form action=" " id="searchform">
          <label>SEARCH</label>
          <input onkeyup="gotoServer()" type="text" size="35" name="sterm" id="uterm" placeholder=" Enter the word 'employee' to view employees">
        </form>
          <span id="demo"></span>
        </div>
  </div>
</section>
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