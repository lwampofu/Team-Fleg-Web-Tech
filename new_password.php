<?php 
        //This program takes and saves the new password of a user

        // Initialize the session
        session_start();
        // Include config file
        include_once 'class.user.php';
        $user = new User();
        if (isset($_POST['submit'])) { 
         extract($_POST);   
        $user->reset_password($confirm_token,$new_password,$confirm_password);

      }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RESET PASSWORD PAGE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
     <script type="text/javascript" src="Validate.js"></script>


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

<body class="FLEG4" >
    <div>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark" id="mainNav">
            <div class="container">
        <ul class="navbar-nav">
          <a class = "navbar-brand" href="#"><img src = "pic_4.png"></a>
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
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">RESET PASSWORD</h5>
            <form class="form-signin" action="" method="post" name="login">

              <div class="form-label-group">
               Token <input type="text" id="inputToken" name="confirm_token" class="form-control" placeholder="Enter Token" required autofocus> 
              </div>

              <div class="form-label-group">
               Password <input type="password" id="inputPassword" name="new_password" class="form-control" placeholder="Enter new password" required autofocus>
                
              </div>

              <div class="form-label-group">
                Confirm New Password<input type="password" id="inputConfirmPassword" name = "confirm_password" class="form-control" placeholder="Confirm New Password" required>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit" onclick="validatePass()">Reset Password</button>
              <hr class="my-4">
              <center><a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="User_Page.php">CANCEL</a></center>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
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
