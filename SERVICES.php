<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SERVICES PAGE</title>
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

</head>
<body>

  <div class="FLEG2">

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
    <div id="slides" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li> 
      </ul>
    <div class="carousel-inner">
      <div class = "carousel-item active">
        <img src="img/folder/pic_7.jpg" width="1400px" heigth="500px">
        <div class = "carousel-caption">
          <span class="blink-one"><a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="#services">SERVICES WE OFFER</a></span><br>
          <br>
          <a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="#SERVICES">CLICK TO FIND OUR AFFORDABLE PRICES FOR OUR SERVICES</a>
        </div>
      </div>
      <div class = "carousel-item">
        <img src="img/folder/detail.jpg">
        <div class = "carousel-caption">
          <span class="blink-one"><a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="#services">SERVICES WE OFFER</a></span><br>
          <br>
          <a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="#SERVICES">CLICK TO FIND OUR AFFORDABLE PRICES</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/folder/pro.jpg" width="1450px" height="600px">
      <div class = "carousel-caption">
        <span class="blink-one"><a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="#services">SERVICES WE OFFER</a></span><br>
        <br>
        <a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="#SERVICES">CLICK TO FIND OUR AFFORDABLE PRICES</a>
      </div>
    </div> 
  </div>
</div>

<!--SERVICES-->
<section class="page-section" id="services">
  <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">SERVICES</h2>
          <marquee direction ="right"><h2 class="section-subheading text-muted">What we deliver to our cherished customers</h2></marquee>
        </div>
      </div>
      <div class="row text-center" id="SERVICES">
        <div class="col-md-4">
          <h4 class="service-heading">CAR WASHING</h4>
          <p class="text-muted">PRICES</p>
          <ul>
            <font color="blue"><li>Interior and Exterior Wash = GHS 20</li></font>
            <font color="blue"><li>Wash Addons = GHS 60</li></font>
          </ul>
          <span class="blink-one"><a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="Carwash_Page.php">BOOK NOW</a></span>
        </div>
        <div class="col-md-4">
          <h4 class="service-heading">CAR DETAILING</h4>
          <p class="text-muted">PRICES</p>
          <ul>
            <font color="blue"><li>Totally Awesome (Detailing) = GHS 150</li></font>
            <font color="blue"><li>Complete Car Wash(Detailing) = GHS 350</li></font>
            <font color="blue"><li>Awesome Detail = GHS 500</li></font>
          </ul>
          <span class="blink-one"><a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="Car_Detailing.php">BOOK NOW</a></span>

        </div>
        <div class="col-md-4">
          <h4 class="service-heading">SHOWCASE OF PRODUCTS</h4>
          <p class="text-muted">PRICES</p>
          <ul>
            <font color="blue"><li>Citrus Wash & Gloss: GHS 146.56</li></font>
            <font color="blue"><li>Adam's Car Shampoo: GHS 207.64</li></font>
            <font color="blue"><li>Turtile Wax Car Wash: GHS 54.25</li></font>
          </ul>
          <span class="blink-one"><a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="PRODUCTS.php">PURCHASE NOW</a></span>
        </div>
      </div>
    </div>
    <center><a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="ABOUT_US_PAGE.php">PREVIOUS PAGE</a></center><br>
</section>
<footer class="footer" >
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