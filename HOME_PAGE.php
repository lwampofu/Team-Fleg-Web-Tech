<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HOME PAGE</title>
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

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script type="text/javascript" src="Contact.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


   <!-- javascript validation checking the length of the contact -->
  <script type="text/javascript">
    function validate(){
    /*  var contact = document.getElementById("Contact").value;
      var checkLength = contact.toString().length;
      if(checkLength>10 ||checkLength<10){
        alert("Contact should have 10 digits!");
        return false
      }
      else{
        return true
      }
     */
      var name = document.getElementById("Name").value;
      var testing =  new RegExp(/[~`0-9!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/);
      if (testing.test(name)){
        alert("Enter only characters");
         //action="https://script.google.com/macros/s/AKfycbyyM8n-pjMvVoiLJNWBqt8KleiT5mUxb8QIisgK1Q/exec"
        return false;
      }
      //else if()
      else {
        //alert("input should be a text");
        return true;
        //break;

      }

    }
    
  </script>

</head>
<body>

   <!-- Creates the navigation bar and front image of the home page -->
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
     <!-- Header text on the image that allows users to navigate on the home page -->
    <div class="container text-center headerset">
      <a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="#portfolio"> VIEW OUR SERVICES</a>
      <span class="blink-one"><a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="#contact">HAVE YOU EXPERIENCED OUR SERVICES? PLEASE VALIDATE OUR BUSINESS</a></span>

      
    </div>
     
     

	</div>
  <!-- GALLERY ABOUT OUR SERVICES --> 
  <section class="bg-light page-section" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="section-heading text-uppercase"><marquee direction="right">GALLERY</marquee></h2>
            <h3 class="section-subheading text-muted"><marquee direction = "right">HERE IS WHAT WE DO</marquee></h3>
        </div>
        </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
              </div>
            </div>
            <a href="Car_Detailing.php"><img class="img-fluid" src="img/folder/emma.jpg" alt=""></a>
          <div class="portfolio-caption">
            <span class="blink-one"><h4>Car Detailing</h4></span>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
              </div>
            </div>
            <a href="Carwash_Page.php"><img class="img-fluid" src="img/folder/carwash.jpg" alt=""></a>
          <div class="portfolio-caption">
            <span class="blink-one"><h4>Car Washing</h4></span>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
              </div>
            </div>
            <a href="PRODUCTS.php"><img class="img-fluid" src="img/folder/products.jpg" alt=""></a>
          <div class="portfolio-caption">
            <span class="blink-one"><h4>Advertising of Products</h4></span>
          </div>
        </div>
      </div>
    </div> 
    </section>
    <!-- CUSTOMER FEEDBACK SECTION -->
    <section class="page-section" id="contact">
      <div class="container">
      <div class="row">
        <div class="col-lg-13 text-center">
          <span class="blink-one"><h2 class="section-heading text-uppercase">CUSTOMER FEEDBACK</h2></span>
          <h3 class="section-subheading text-muted">HELP US TO HELP YOU BY LETTING US KNOW OUR CUSTOMER RELATIONSHIP WITH YOU. FOR AT <abbr title="City Mobile Car Wash and Auto- Detailing ">CMCW</abbr> THE CUSTOMER COMES FIRST</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          
          <form id="contactForm" method="POST" class="pure-form pure-form-stacked" data-email="from_email@example.com" action = "https://script.google.com/macros/s/AKfycbyyM8n-pjMvVoiLJNWBqt8KleiT5mUxb8QIisgK1Q/exec" onsubmit="return validate()" 
          >
          <div class="row">
            <div class="col-md-6">


        <div class="form-group">
        <input id="Name" name="name" placeholder="PLEASE ENTER YOUR NAME*" type="text" data-validation-required-message="Please enter your name." onkeyup="validate()"   style="width: 80%"  required/>
        <p class="help-block text-danger"></p>
        </div>

        <br>

        <div class="form-group">
        <input id="Email" name="email" type="email" value=""
                placeholder="EMAIL ADDRESS FORMAT 'name@email.com'* " onkeyup="validate()" style="width: 99%" required/>
        <p class="help-block text-danger"></p>
        </div>

        <br>

        <div class="form-group">
        <font color="white"><label for="message">Message: </label></font>
        <textarea type="text" id="Message" name="message" 
                  placeholder="Plase tell us what you think of our Services" style="width: 100%" required></textarea>
        <p class="help-block text-danger"></p>
        </div><br>

        <br>

        <div class="col-lg-11 text-center">
          <center><button onclick="validate()" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger">
            <i class="fa fa-paper-plane"></i>&nbsp;<span class="blink-one">SUBMIT FORM</span>
        </button></center>
        <section>

          <span class="blink-one"><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio">MOVE UP TO VIEW SERVICES</a></span><br>
          <br>
         <span class="blink-one"> <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger"  href="ABOUT_US_PAGE.php">NEXT PAGE</a></span>
        </section>
        </div>
        </div>
    </form>
  

          <script data-cfasync="false" type="text/javascript"
            src="https://cdn.rawgit.com/dwyl/learn-to-send-email-via-google-script-html-no-server/master/form-submission-handler.js"></script>
        </div>
      </div>
    </div>
    </section>
    <!-- Footer section -->
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