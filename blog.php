<?php

  include('connect.php');
  $query = mysqli_query($dbconnect,"select * from properties" );

  if (isset($_POST['subscribe'])) {
      
      
    $email =mysqli_real_escape_string ($dbconnect,$_POST['subscribe']);
    $created_at =date("Y-m-d H:i:s",time());
    
    function isValidEmail($email){ 
      global $error;
        $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
    
        if (!preg_match( $pattern,$email)){
            $error .="email not valid";
        } 
          
     } 
     
     isValidEmail($email);

      if (empty($error)) {
          $check_email = mysqli_query($dbconnect,"SELECT email FROM `subscribers` WHERE `email` = '$email'");
          if (mysqli_num_rows($check_email) > 0) {
              $error .= "Email already exists";
          }

          if (empty($error)) {   
              $encrypted_password = sha1($password);

              $insert = mysqli_query($dbconnect,"INSERT INTO `subscribers` (`email`,`subscribed_at`) VALUES ('$email','$created_at')");
              if($insert){
                  header('location:index.php');
              }else{
                $error .= "an error occured";
              }
          }
          
      }
  }
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Azenta Template">
    <meta name="keywords" content="Azenta, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Azenta | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
        a:link, a:visited {
        text-decoration: none;
        }
        
        h3{
            color:white !important;
        }
       
        </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <nav class="main-menu">
                            <ul>
                                <li><a href="./index.php">Home</a></li>
                                <li class="active"><a href="./blog.php">News</a></li>
                                <li><a href="./aboutus.php">About Us</a></li>
                                <li><a href="./contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                   
    </header>
    <!-- Header End -->

     <!-- Hero Section Begin -->
     <section class="hero-section">
        <div class="hero-items">
            <div class="single-hero-item set-bg" data-setbg="img/hero/hero-3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="hero-text">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-section blog-page spad">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="properties-title">
                            <div class="section-title">
                                
                                <h2>News</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <div class="sb-pic">
                            <img src="img/blog/latest-8.jpg" alt="">
                        </div>
                        <div class="sb-text">
                            <ul>
                                <li><i class="fa fa-user"></i> Adam Smith</li>
                                <li><i class="fa fa-clock-o"></i> 12th Feb, 2019</li>
                            </ul>
                            <h4><a href="./blog-details.php">The Small Change That Creates Massive Results</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Partner Carousel Section Begin -->
    <div class="partner-section">
        <div class="container">
            <div class="partner-carousel owl-carousel">
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="img/partner/partner-1.png" alt="">
                    </div>
                </a>
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="img/partner/partner-2.png" alt="">
                    </div>
                </a>
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="img/partner/partner-3.png" alt="">
                    </div>
                </a>
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="img/partner/partner-4.png" alt="">
                    </div>
                </a>
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="img/partner/partner-5.png" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Partner Carousel Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-3">
                        <?php 
                            if (!empty($error)){ ?>
                            <div class="alert alert-danger alert-dismissible col-md-12">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Error!</strong> <?php  echo $error  ?>
                            </div>
                        <?php } ?>
                        <div class="footer-logo">
                        <h3>Newsletter</h3>
                            <p>Subscribe our newsletter gor get notification about new updates.</p>
                            <form action="index.php" class="newslatter-form" method="post">
                                <input type="text" placeholder="Enter your email..." name="subscribe">
                                <button type="submit" name="submit"><i class="fa fa-location-arrow"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="footer-widget">
                            <h4>Property City</h4>
                            <ul>
                                <li><i class="fa fa-caret-right"></i> <a href="#">Florida</a></li>
                                <li><i class="fa fa-caret-right"></i> <a href="#">New York</a></li>
                                <li><i class="fa fa-caret-right"></i> <a href="#">Washington</a></li>
                                <li><i class="fa fa-caret-right"></i> <a href="#">Los Angeles</a></li>
                            </ul>
                            <ul>
                                <li><i class="fa fa-caret-right"></i> <a href="#">St Louis</a></li>
                                <li><i class="fa fa-caret-right"></i> <a href="#">Jacksonville</a></li>
                                <li><i class="fa fa-caret-right"></i> <a href="#">San Jose</a></li>
                                <li><i class="fa fa-caret-right"></i> <a href="#">San Diego</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-widget">
                            <h4>Social</h4>
                            <ul class="social">
                                <li><i class="ti-facebook"></i> <a href="#">Facebook</a></li>
                                <li><i class="ti-instagram"></i> <a href="#">Instagram</a></li>
                                <li><i class="ti-twitter-alt"></i> <a href="#">Twitter</a></li>
                                <li><i class="ti-google"></i> <a href="#">Google+</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-widget">
                            <h4>Contact Us</h4>
                            <ul class="contact-option">
                                <li><i class="fa fa-map-marker"></i> 16 Creek Ave. Farming, NY</li>
                                <li><i class="fa fa-phone"></i> (+88) 666 121 4321</li>
                                <li><i class="fa fa-envelope"></i> info.colorlib@gmail.com</li>
                                <li><i class="fa fa-clock-o"></i> Mon - Sat, 08 AM - 06 PM</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-text">
  Copyright &copy;<script>document.write(new Date().getFullYear());</script>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>