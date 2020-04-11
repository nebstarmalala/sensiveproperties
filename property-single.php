<?php 
 include('connect.php');
 $id=$_GET['id'];

 if (!empty($id)){
    $_property = mysqli_query($dbconnect,"SELECT  `title`, `category`, `location`,`latitude`,`longitude`, `sale_type`, `bedrooms`, `price`, `area`, `garage`, `description`, `image` FROM `properties` WHERE `id` = '$id' ");
  }else{
        header("location:index.php");
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
        a.hover {
            color: #007bff;
            text-decoration: none;
            background-color: transparent;
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="language-bar">
            <div class="language-option">
                <img src="img/flag.png" alt="">
                <span>English</span>
                <i class="fa fa-angle-down"></i>
                <div class="flag-dropdown">
                    <ul>
                        <li><a href="#">English</a></li>
                        <li><a href="#">Germany</a></li>
                        <li><a href="#">China</a></li>
                    </ul>
                </div>
            </div>
            <div class="property-btn">
                <a href="#" class="property-sub">Submit Property</a>
            </div>
        </div>
        <nav class="main-menu">
            <ul>
                <li><a href="./index.html">Home</a></li>
                <li><a href="./property.html">Property</a></li>
                <li><a href="./about-us.html">Agets</a></li>
                <li><a href="./blog.html">News</a></li>
                <li><a href="./property-details.html">Pages</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div class="nav-logo-right">
            <ul>
                <li>
                    <i class="icon_phone"></i>
                    <div class="info-text">
                        <span>Phone:</span>
                        <p>(+12) 345 6789</p>
                    </div>
                </li>
                <li>
                    <i class="icon_map"></i>
                    <div class="info-text">
                        <span>Address:</span>
                        <p>16 Creek Ave, <span>NY</span></p>
                    </div>
                </li>
                <li>
                    <i class="icon_mail"></i>
                    <div class="info-text">
                        <span>Email:</span>
                        <p>Info.cololib@gmail.com</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <nav class="main-menu">
                            <ul>
                                <li><a href="./index.php">Home</a></li>
                                <li><a href="./blog.php">News</a></li>
                                <li><a href="./aboutus.php">About Us</a></li>
                                <li><a href="./contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        
    </header>
    <!-- Header End -->

    <!-- Property Details Hero Section Begin -->
    <section class="pd-hero-section set-bg" data-setbg="img/properties/product-content-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="pd-hero-text">
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
                                <p>upto 7 Bath Beds</p>
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
    </section>
    <!-- Property Details Hero Section Begin -->

    <!-- Property Details Section Begin -->
<?php while ($property=mysqli_fetch_assoc($_property)) { ?>
    <section class="property-details-section spad">
        <div class="container">
        <h2><?php echo $property['title'] ?></h2>
        <br>
            <div class="row">
                <div class="col-lg-9">
                    <div class="pd-details-text">
                        <div class="property-more-pic">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="img/properties/property-details-b1.jpg" alt="">
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    <div class="pt" data-imgbigurl="img/properties/property-details-b2.jpg"><img
                                            src="img/properties/thumb-1.jpg" alt=""></div>
                                    <div class="pt active" data-imgbigurl="img/properties/property-details-b1.jpg"><img
                                            src="img/properties/thumb-2.jpg" alt=""></div>
                                    <div class="pt" data-imgbigurl="img/properties/property-details-b3.jpg"><img
                                            src="img/properties/thumb-3.jpg" alt=""></div>
                                    <div class="pt" data-imgbigurl="img/properties/property-details-b4.jpg"><img
                                            src="img/properties/thumb-4.jpg" alt=""></div>
                                    <div class="pt" data-imgbigurl="img/properties/property-details-b5.jpg"><img
                                            src="img/properties/thumb-5.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="pd-details-tab">
                            <div class="tab-item">
                                <ul class="nav" role="tablist">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#tab-1" role="tab">Overview</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab-2" role="tab">Description</a>
                                    </li>
                                   
                                </ul>
                            </div>
                            <div class="tab-item-content">
                                <div class="tab-content">
                                    <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                        <div class="property-more-table">
                                            <table class="left-table">
                                                <tbody>
                                                    <tr>
                                                        <td class="pt-name">Price</td>
                                                        <td class="p-value"><?php echo $property['price'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-name">Property Type</td>
                                                        <td class="p-value"><?php echo $property['category'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-name">Contract type</td>
                                                        <td class="p-value"><?php echo $property['sale_type'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-name">Rooms</td>
                                                        <td class="p-value"><?php echo $property['bedrooms'] ?></td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                            <table class="right-table">
                                                <tbody>
                                                    <tr>
                                                        <td class="pt-name">location</td>
                                                        <td class="p-value"><?php echo $property['location'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-name">Garages</td>
                                                        <td class="p-value"><?php echo $property['garage'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-name">Home area</td>
                                                        <td class="p-value"><?php echo $property['area'] ?> sqft</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-name">#</td>
                                                        <td class="p-value">#</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                        <div class="pd-table-desc">
                                            <?php echo $property['description'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="property-map">
                            <h4>Map</h4>
                            <div id="map" style="height: 400px;"></div>
                        </div>
                        <div class="property-contactus">
                            <h4>Contact Us</h4>
                            <div class="row">
                                <div class="col-md-12 row">
                                    <div class="col-md-4">
                                            <a href="#"  class="property-items"><i class="fa fa-map-marker"></i> 16 Creek Ave. Farming, NY</a>
                                    </div>
                                    <div class="col-md-4">
                                            <a href="#"  ><i class="fa fa-phone"></i> (+88) 666 121 4321</a>
                                    </div>
                                    <div class="col-md-4">
                                            <a href="#"  ><i class="fa fa-envelope"></i> info.colorlib@gmail.com</a>
                                    </div>
                                </div>
                                <div class="col-lg-12 contact-text">
                                    <form action="contact.php" class="contact-form" method="post" >
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
                <div class="col-lg-3">
                    <div class="property-sidebar">
                        <h4>Search Property</h4>
                        <form action="#" class="sidebar-search">
                            <div class="sidebar-btn">
                                <div class="bt-item">
                                    <input type="radio" name="s-type" id="st-buy" checked>
                                    <label for="st-buy">Buy</label>
                                </div>
                                <div class="bt-item">
                                    <input type="radio" name="s-type" id="st-rent">
                                    <label for="st-rent">Rent</label>
                                </div>
                            </div>
                            <select>
                                <option value="">Locations</option>
                            </select>
                            <select>
                                <option value="">Status</option>
                            </select>
                            <select>
                                <option value="">No of Bedroom</option>
                            </select>
                            <select>
                                <option value="">No of Bathrooms</option>
                            </select>
                            <select>
                                <option value="">No of Guest</option>
                            </select>
                            <div class="room-size-range">
                                <div class="price-text">
                                    <label for="roomsizeRangeP">Size:</label>
                                    <input type="text" id="roomsizeRangeP" readonly>
                                </div>
                                <div id="roomsize-range-P" class="slider"></div>
                            </div>
                            <div class="price-range-wrap">
                                <div class="price-text">
                                    <label for="priceRangeP">Price:</label>
                                    <input type="text" id="priceRangeP" readonly>
                                </div>
                                <div id="price-range-P" class="slider"></div>
                            </div>
                            <button type="submit" class="search-btn">Search Property</button>
                        </form>
                        <div class="best-agents">
                            <h4>Best Agents</h4>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="img/properties/best-agent-1.jpg" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>Lester Bradley</h5>
                                    <span>Company Agents</span>
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="img/properties/best-agent-2.jpg" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>Janie Blair</h5>
                                    <span>Company Agents</span>
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="img/properties/best-agent-3.jpg" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>Sophia Cole</h5>
                                    <span>Marketing & Ceo</span>
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Property Details Section End -->

    

    <!-- Footer Section Begin -->
    <?php include("footer.php"); ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main2.js"></script>
    <script>
     
      function initMap() {
        var latitude = <?php echo $property['latitude'] ?>;
        var longitude = <?php echo $property['longitude'] ?>;
        var map;
        
        var myLatlng = new google.maps.LatLng(latitude,longitude);
        var mapOptions = {
        zoom: 15,
        center: myLatlng
        }
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            
        });

        // To add the marker to the map, call setMap();
        marker.setMap(map);
      }
      
        
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBO5Else2rW4UNyXiCMp3y20JV7BseTMys&callback=initMap"
    async defer></script>
<?php } ?>
</body>

</html>