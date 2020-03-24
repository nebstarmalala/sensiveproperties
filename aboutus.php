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
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="main-menu">
                            <ul>
                                <li><a href="./index.php">Home</a></li>
                                <li><a href="./blog.php">News</a></li>
                                <li class="active"><a href="./aboutus.php">About Us</a></li>
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
               
            </div>
        </div>
    </section>
    <!-- Hero Section End -->


    <!-- Feature Section Begin -->
    
    <!-- subscribers Section Begin -->
    <div class="top-properties-section spad container">
        <div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="properties-title">
                        <div class="section-title">
                            <h2>About Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3>Company Overview</h3>
        <br>
        <p> Sensive Properties is a real estate services firm focused on delivering high quality and customized services to individuals,
            the private sector and government clients in Kenya. The firm, 
            duly incorporated under the companies Act Cap 486 in 1994, 
            began operations with a team of only four members of staff but has now grown to over two hundred and the initial five clients have multiplied many times over.
            Today, the company has made its presence strongly felt in the Kenyan property market and can with certainty declare itself a market leader.
            The firm offers a wide scope of real estate services, particularly specializing in real estate consultancy, 
            management and sale of residential properties and a variety of commercial properties in Nairobi, Mombasa and East African region.
        </p>
        <p> Sensive Properties has expertise in both rental property and property for sale in Kenya. 
            In over two decades of its existence, Sensive Properties Has definitely impacted housing in Kenya in a big way. 
            With one of the largest property listings by a property Agent in Kenya, Sensive Properties continues  to epitomize its mantra of caring, always.
            Sensive Properties offers highly specialized and professional property management services in Kenya. 
            This is on the backbone of decades of experience and the use of the state of the art technology. 
            The use of a cloud based, internationally proven software solution allows real time access of tenants and landlords data. 
            The professionalism and seamless property management of Sensive Properties are unmatched in the region.
        </p>
        <br>
        <h3>Management Team</h3>
        <br>
        <p> Sensive Properties is led by a diverse, seasoned management team, each possessing extensive experience with leading property development and real estate management firms in the country. Undoubtedly, 
            our success in both the residential and commercial property markets in Kenya and particularly in Nairobi is drawn from our immensely rich personnel base whose vast experience and expertise in the real estate industry has been demonstrated very ably for the past 21 years.
            The team consists of young, highly motivated and multidisciplinary graduates who are actively involved in consultancy, marketing, development, letting and management of both residential and commercial properties.
        </p>
        
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