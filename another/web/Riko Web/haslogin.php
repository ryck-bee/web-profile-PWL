<?php 

require 'functions.php';

$tech = query("SELECT * FROM tb_content");

if (isset($_POST["findi"])) {

  $tech = finding($_POST["keyword"]);
}
if (isset($_POST["reset"])) {

  $tech = query("SELECT * FROM tb_content");
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
            <p class="mb-0">
              <span class="mr-3"><strong class="text-white">Hii, You are Login now :D</span>
            </p>
          </div>
          <div class="col-auto">
            <ul class="social-media">
              <li ><a href="logout.php" style=""><span style="color: #ff0000;">Logout</span></a></li>
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
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li>
                  <a href="#about-section" class="nav-link">About</a>
                </li>
                <li><a href="#work-section" class="nav-link text-succes">Gallery</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a>
                </li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle text-black">
              <span class="icon-menu h3"></span>
            </a>
          </div>
        </div>
      </div>
      
    </header>

  

    <div class="site-blocks-cover overlay" style="background-image: url(images/macbook-pro-beside-dslr-camera-and-mug-3568521.jpg); " data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center " >
                <h1 >We Love <span class="typed-words"></span></h1>
                <p class="lead mb-5">All About New Tech</p>
                
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  


    

 <div class="site-section" id="about-section" style="background-color: #f6f6f6;" >
      <div class="container">
        <div class="row mb-5">
          
          <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
            <img src="images/about_1.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-6 order-md-1" data-aos="fade">

            <div class="row">

              <div class="col-12">
                <div class="text-left pb-1">
                  <h2 class="text-black h1 site-section-heading">About Us</h2>
                </div>
              </div>
              <div class="col-12 mb-4">
                <p class="lead text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet incidunt magnam corrupti, odit eos harum quaerat nostrum voluptatibus aspernatur eligendi accusantium cum, impedit blanditiis voluptate commodi doloribus, nemo dignissimos recusandae.</p>
              </div>
              <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                <div class="unit-4">
                  <div class="unit-4-icon mr-4 mb-3"><span class="text-secondary icon-phonelink"></span></div>
                  <div>
                    <h3 class=" text-black">Web &amp; Mobile Specialties</h3>
                    <p class=" text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis consect.</p>
                    <p class="mb-0 text-black"><a href="#" class="text-danger">Learn More</a></p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                <div class="unit-4">
                  <div class="unit-4-icon mr-4 mb-3"><span class="text-secondary icon-extension"></span></div>
                  <div>
                    <h3 class=" text-black">Intuitive Thinkers</h3>
                    <p class=" text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis.</p>
                    <p class="mb-0"><a href="#" class="text-danger">Learn More</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <section class="site-section" id="work-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="text-black h1 site-section-heading text-center">New Tech</h2>
            <p class="lead text-black">Photo and Info Technology.</p>
          </div>
        </div>
      </div>

      <!-- search -->
      <form action="" method="POST">
      <div class="container">
        <div class="row">
          
          <div class="col align-self-center">
            <div class="input-group mb-3">
            
            <input type="text" name="keyword" autocomplete="off" class="form-control" placeholder="Search name Phone? Or What?">
            <div class="input-group-append">
              <button class="btn btn-outline-warning" name="reset" type="submit" id="reset">Reset</button>
              <button class="btn btn-outline-success" name="findi" type="submit" id="findi">Find Something</button>
            </div>
            
            </div>
          </div>
          
        </div>
        <br><br>
      </div>
    </form>

      <div class="container-fluid">
        <div class="row">
          
        <?php foreach ($tech as $data) :?>
          <div class="col-md-6 col-lg-3">
            <a href="images/tech/<?= $data['gmb_content'] ?>" class="media-1" data-fancybox="gallery">
              
              <div class="img-content" >
                <img src="images/tech/<?= $data['gmb_content'] ?>" alt="Image">
              </div>
              <div class="media-1-content">
                <h2><?= $data['nama_content'] ?></h2>
                <span class="category"><?= $data['desc_content'] ?></span>
              </div>
            </a>
            <div class="btn-group dropright">
              <button type="button" class="btn btn-light dropdown-toggle btn-outline-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item text-succes" href="edit.php?id=<?= $data['id'] ?>">Edit</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="delete.php?id=<?= $data['id'] ?>" onclick="return confirm('Are you sure to delete this ??');">Delete</a>
              </div>

            </div>
            <div><br></div>
          </div>

        <?php endforeach; ?>

         
        </div>
      </div>
      
    </a>
    </section>
    <div>
      <a href="uploadimg.php" class=" py-5 d-block" style="background-color: #f2f2f2;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md10" ><h2 class="text-dark">Upload</h2></div>
        </div>
      </div> 
      </a> 
    </div>
  
    <section class="site-section testimonial-wrap" style="background-color: #f6f6f6;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="text-black h1 site-section-heading text-center">Quotes</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              
              <blockquote class="mb-5 text-black">
                <p class=" text-black">&ldquo;People don't care about what you say, they care about what build.&rdquo;</p>
              </blockquote>

              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p class="text-black">Mark Zuckerberg</p>
              </figure>
            </div>
          </div>
          <div>
            <div class="testimonial">

              <blockquote class="mb-5 text-black">
                <p class=" text-black">&ldquo;If today ware the last day of your life, would you want to do what you are about to do today?.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p class="text-black">Stave Jobs</p>
              </figure>
              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5 text-black">
                <p class=" text-black">&ldquo;The best customer service is if the customer doesn't need to call you, doesn't need to talk to you.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_5.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p class="text-black">Jeff Benoz</p>
              </figure>

            </div>
          </div>

        </div>
    </section>

    

   
  
    
    <div class="site-section border-bottom" id="team-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="text-black h1 site-section-heading">Our Team</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <div class="person text-center">
              <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
              <h3 class="text-dark">Stave Jobs</h3>
              <p class="position text-muted text-black">Co-Founder, President, Admin</p>
              <p class="mb-4 text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
              <ul class="ul-social-circle">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <div class="person text-center">
              <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
              <h3 class="text-dark">Mark Zuckerberg</h3>
              <p class="position text-muted">Co-Founder, COO</p>
              <p class="mb-4 text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
              <ul class="ul-social-circle">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
            <div class="person text-center">
              <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
              <h3 class="text-dark">Jeff Benoz</h3>
              <p class="position text-muted">Marketing</p>
              <p class="mb-4 text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
              <ul class="ul-social-circle">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>



    <section class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="text-black h1 site-section-heading">Contact</h2>
          </div>
        </div>
        <div class="row">
         

          <div class="col-md-12">
            
            <div class="p-4 mb-3 bg-white">
              <h2 class="h4 text-black mb-5 text-center">Contact us</h2>
              <p class="mb-0 font-weight-bold text-black">Address</p>
              <p class="mb-4 text-black">Wringin, Bondowoso, Jawa Timur, Indonesia</p>

              <p class="mb-0 font-weight-bold text-black">Phone</p>
              <p class="mb-4"><a href="#" class="text-danger">+62 851 5543 9394</a></p>

              <p class="mb-0 font-weight-bold text-black">Email Address</p>
              <p class="mb-0"><a href="#" class="text-danger">riko.putra.ds1@gmail.com</a></p>

            </div>
            
          </div>
        </div>
      </div>
    </section>

    <a href="" class=" py-5 d-block" style="background-color: #3a3a3a;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md10" ><h2 class="text-white">Go Up</h2></div>
        </div>
      </div>  
    </a>
    
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

  <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: [" New Technology"," Smart Tech"," Nice Devices"],
            typeSpeed: 100,
            backSpeed: 50,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>

  <script src="js/main.js"></script>
  


  </body>
</html>