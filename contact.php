<?php
 include('connect.php');
    if (isset($_POST['submit'])) {
      
      
      $email =mysqli_real_escape_string ($dbconnect,$_POST['email']);
      $subject =mysqli_real_escape_string ($dbconnect,$_POST['subject']);
      $body =mysqli_real_escape_string ($dbconnect,$_POST['body']);
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
            
  
            if (empty($error)) {   
                $encrypted_password = sha1($password);
  
                $insert = mysqli_query($dbconnect,"INSERT INTO `queries` (`email`, `subject`, `body`) VALUES ('$email','$subject','$body')");
                if($insert){
                    header('location:contact.php');
                    
                }else{
                    echo "an error occured";
                }
            }
            
        }
    }
?>
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
    <title>Sensive properties</title>

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
        h2,h3{
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
                                <li><a href="./blog.php">News</a></li>
                                <li><a href="./aboutus.php">About Us</a></li>
                                <li class="active"><a href="./contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    
    </header>
    <!-- Header End -->

  
    <!-- Contact Section Begin -->
    <section class="contact-section single-hero-item set-bg"  data-setbg="img/hero/hero-3.jpg">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-7 offset-lg-6">
                            <div class="contact-text">
                                <div class="section-title">
                                    <h2 stye="color:white;">Get In Touch</h2>
                                </div>
                                <form action="contact.php" class="contact-form" method="post" novalidate="novalidate">
                                <?php 
                                    if (!empty($error)){ ?>
                                    <div class="alert alert-danger alert-dismissible col-md-12">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>Error!</strong> <?php  echo $error  ?>
                                    </div>
                                <?php } ?>
                                    <div>
                                        <input type="email" placeholder="Email" name="email">
                                    </div>
                                    <div>
                                        <input type="text" placeholder="Subject" name="subject">
                                    </div>
                                    <div>
                                        <textarea placeholder="Messages" name="body"></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" class="site-btn" name="submit">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Partner Carousel Section Begin -->
    <div class="partner-section contact-partner">
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

    <?php include("footer.php") ?>
    
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>