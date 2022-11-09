<?php 

session_start();

if( isset($_SESSION["login"]) ) {

  echo "
    <script>
    alert('Succses Login !');
    document.location.href = 'haslogin.php'
    </script>
    ";
  exit;
}

require 'functions.php';


if( isset($_POST["login"]) ) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");

  if( mysqli_num_rows($result) === 1 ) {
    $data = mysqli_fetch_assoc($result);

    if(password_verify($password, $data["password"]) ) {
      $_SESSION["login"] = true;

      echo "
      <script>
      alert('Succses Login !');
      document.location.href = 'haslogin.php'
      </script>
      ";
      exit;
    }
  }

  $error = true;
} 

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hitech</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="border-bottom top-bar py-2" id="home-section" style="background-color: #222222;">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <!-- <p class="mb-0">
              <span class="mr-3"><strong class="text-white">Phone:</strong> <a href="tel://#">+1 234 5678 9101</a></span>
              <span><strong class="text-white">Email:</strong> <a href="#">info@yourdomain.com</a></span>
            </p> -->
            <p class="mb-0">
              <span class="mr-3"><strong class="text-white">Hii, Welcome :)</span>
            </p>
          </div>
          <div class="col-auto">
            <ul class="social-media">
              <li><a href="index.php" style=""><span class="text-warning">Go Back</span></a></li>
            </ul>
          </div>
        </div>
      </div> 
    </div>

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo">
              <span  class="text-black h2 mb-0">Hitech<span class="text-danger">.</span>
              </span>
            </h1>
          </div>
          


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle text-black">
              <span class="icon-menu h3"></span>
            </a>
          </div>
        </div>
      </div>
      
    </header>

  



    <section class="site-section bg-light" id="contact-section">
      <div class="container">
        <br><br><br>
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="text-black h1 site-section-heading">Login</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">

            

            <form action="" method="POST" class="p-5 bg-white">
              
              

              <div class="row form-group">
                <?php if( isset($error) ) : ?>
                  <p style="color: red;">Wrong Username or Password!</p>
                <?php endif; ?>
                <div class="col-md-12">
                  <label class="text-black" for="fname">Username</label>
                  <input type="text" autocomplete="off" required="required" id="fname" class="form-control" name="username">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="password">Password</label> 
                  <input type="password" autocomplete="off" required="required" id="password" class="form-control" name="password">
                </div>
              </div>

              

              <br>


              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="login" value="Login" class="btn btn-success btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
        </div>
      </div>
    </section>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
            <div class="col-md-12 ">
              <p class="text-white">
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
              </p>
              </div>
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  <script src="js/main.js"></script>
  


  </body>
</html>