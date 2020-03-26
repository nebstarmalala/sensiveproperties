
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
    <!-- Search Form Section Begin -->
    <div class="search-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="search-form-text">
                        <div class="search-text">
                            <i class="fa fa-search"></i>
                            Find Your Home
                        </div>
                        <div class="home-text">
                            <i class="fa fa-home"></i>
                            House For Sell
                        </div>
                    </div>
                    <form action="#" class="filter-form">
                        <div class="first-row">
                            <select>
                                <option value="">Villa & Pool</option>
                            </select>
                            <select>
                                <option value="">Title</option>
                            </select>
                            <select>
                                <option value="">Ani City</option>
                            </select>
                            <select>
                                <option value="">Any Bithrooms</option>
                            </select>
                        </div>
                        <div class="second-row">
                            <select>
                                <option value="">Any Bedrooms</option>
                            </select>
                            <div class="price-range-wrap">
                                <div class="price-text">
                                    <label for="priceRange">Price:</label>
                                    <input type="text" id="priceRange" readonly>
                                </div>
                                <div id="price-range" class="slider"></div>
                            </div>
                            <div class="room-size-range">
                                <div class="price-text">
                                    <label for="roomsizeRange">Size:</label>
                                    <input type="text" id="roomsizeRange" readonly>
                                </div>
                                <div id="roomsize-range" class="slider"></div>
                            </div>
                            <button type="button" class="search-btn">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Form Section End -->


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
                                <p><?php echo substr($property['description'],0,340)."..."; ?></p>
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
                                        <a href="property-single.php?id=<?php echo $property['id'] ?>" class="top-property-all">View  Property</a>
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

    <?php include("footer.php") ?>
    
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- <script src="js/owl.carousel.min.js"></script> -->
    <script src="js/main.js"></script>
</body>

</html>