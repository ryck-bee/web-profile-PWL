<?php 


require 'functions.php';



if (isset($_POST["upload"])) {

  // var_dump($_POST);
  // var_dump($_FILES);
  // die;

  if (gambar($_POST) > 0) {

    echo "
    <script>
    alert('Succses Upload !');
    document.location.href = 'haslogin.php'
    </script>
    ";
  }else{

    echo "
    <script>
    alert('Failed Upload');
    document.location.href = 'uploadimg.php'
    </script>
    ";
  }
}

$content = query("SELECT * FROM tb_content");


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
            <p class="mb-0">
              <span class="mr-3"><strong class="text-white">Hii, Upload in Here :></span>
            </p>
          </div>
          <div class="col-auto">
            <ul class="social-media">
              <li><a href="haslogin.php" style=""><span class="text-warning">Go Back</span></a></li>
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
            <h2 class="text-black h1 site-section-heading">Upload Content</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">

            

            <form action="" method="POST" enctype="multipart/form-data" class="p-5 bg-white">
              
              

              <div class="row form-group">
                <div class="col-md-6">
                  <label class="text-black" for="cname">Content Name</label>
                  <input type="text" required="required" id="cname" class="form-control" name="cname">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="password">Description Content</label> 
                  <input type="text" required="required" id="desc" class="form-control" name="desc">
                </div>
              </div>
              <br>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="gambar">Picture ( jpg, jpeg ,png ) Max 1MB</label>
                  <input type="file" required="required" id="gambar" class="form-control" name="gambar">
                </div>
              </div>
              <br><br>
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="upload" value="upload" class="btn btn-success btn-md text-white">
                </div>
              </div>
             <div class="input-group mb-3">
           
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