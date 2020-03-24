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
<?php 

include('connect.php');
$properties = mysqli_query($dbconnect,"select * from properties" );

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Azenta Template">
    <meta name="keywords" content="Azenta, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Azenta</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
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
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="main-menu">
                            <ul>
                                <li class="active"><a href="./index.php">Home</a></li>
                                <li><a href="./blog.php">News</a></li>
                                <li><a href="./aboutus.php">About Us</a></li>
                                <li><a href="./contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    
                </div>
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
                                <p class="room-location"><i class="icon_pin"></i> Your Location</p>
                                <h2>Your Sensive Home</h2>
                                <div class="room-price">
                                    <span>Price:</span>
                                    <p>$Your Price</p>
                                </div>
                                <ul class="room-features">
                                    <li>
                                        <i class="fa fa-arrows"></i>
                                        <p>various sqft(s)</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <p>upto 8 Bedrooms</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath"></i>
                                        <p>upto 7 Bathsbed</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <p> Garage</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->


    <!-- Feature Section Begin -->
    
    <!-- subscribers Section Begin -->
    <div class="top-properties-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="properties-title">
                        <div class="section-title">
                            <span>Top Properties For You</span>
                            <h2>Top Properties</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="top-properties-carousel owl-carousel">
                <div class="single-top-properties">
                <?php while ($property=mysqli_fetch_assoc($properties)) { ?>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="stp-pic">
                                <img src="uploads/<?php echo $property['image'] ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="stp-text">
                                <div class="s-text"><?php echo $property['sale_type'] ?></div>
                                <h4><?php echo $property['title'] ?></h4>
                                <div class="room-price">
                                    <span>Start From:</span>
                                    <h4><?php echo $property['price'] ?></h4>
                                </div>
                                <div class="properties-location"><i class="icon_pin"></i> </i> <?php echo $property['location'] ?></div>
                                <p><?php echo substr($property['description'],0,180)."..."; ?></p>
                                <ul class="room-features">
                                    <li>
                                        <i class="fa fa-arrows"></i>
                                        <p><?php echo $property['area'] ?> sqft</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <p><?php echo $property['bedrooms'] ?></p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath"></i>
                                        <p>7 Baths Bed</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <p><?php echo $property['garage'] ?></p>
                                    </li>
                                    <li>
                                        <a href="property-single.php" class="top-property-all">View  Property</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <br>
                <?php } ?>
                </div>
                
            </div>
        </div>
    </div>
    <!-- subscribers Section End -->

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
    
    <script src="js/main.js"></script>
</body>

</html>