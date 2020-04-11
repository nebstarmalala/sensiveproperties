<?php
 include('../connect.php');
 include ('session.php');
 $id=$_GET['id'];

    if (isset($id)){
        $select_property = mysqli_query($dbconnect,"SELECT * FROM `properties` WHERE `id` = '$id' ");
        if (mysqli_num_rows($select_property) == 1) {
            $properties = mysqli_fetch_assoc($select_property);
        }
        // else{
        // //     header('location:home.php'); 
        // // }
    }
    else{
        header('location:properties.php'); 
    }

   if (isset($_POST['submit'])) {
        include('connect.php');

        $file=$_FILES['filetoupload']['tmp_name'];
        $target_dir = "../uploads/";

        $file_array = explode(".", $_FILES["filetoupload"]["name"]);    
        $file_extension = end($file_array);
        $new_file_name = md5(microtime(true).mt_Rand()) . "." . $file_extension;   
        $uploadOk = 1;  

        
        
        if ($_FILES["filetoupload"]["size"] > 1000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($file_extension != "jpg" && $file_extension != "png" && $file_extension != "jpeg"
            && $file_extension != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
                return;
        }
        
        if ($uploadOk !=0 ){
            if (move_uploaded_file($_FILES['filetoupload']['tmp_name'],$target_dir.$new_file_name)) {
                $title =mysqli_real_escape_string ($dbconnect,$_POST['title']);
                $category =mysqli_real_escape_string ($dbconnect,$_POST['category']);
                $location=mysqli_real_escape_string ($dbconnect,$_POST['location']);
                $sale_type =mysqli_real_escape_string ($dbconnect,$_POST['sale_type']);
                $bedrooms =mysqli_real_escape_string ($dbconnect,$_POST['bedrooms']);
                $price =mysqli_real_escape_string ($dbconnect,$_POST['price']);
                $area =mysqli_real_escape_string ($dbconnect,$_POST['area']);
                $garage =mysqli_real_escape_string ($dbconnect,$_POST['garage']);
                $bathbed =mysqli_real_escape_string ($dbconnect,$_POST['bathbed']);
                $description =mysqli_real_escape_string ($dbconnect,$_POST['description']);
                $created_at =date("Y-m-d H:i:s",time());

                $update=mysqli_query($dbconnect,"UPDATE `properties` SET  `title`='$title',`category`='$category',`location`='$location',`sale_type`='$sale_type',`bedrooms`='$bedrooms',`price`='$price',`area`='$area',`garage`='$garage',`bathbeds`='$bathbed',`description`='$description',`image`='$new_file_name',`added_on`='$created_at' WHERE  `id` = '$id'");
                if($update){            
                    
                    header('location:properties.php');
                }else{
                    echo "an error occured";
                }
                // echo "The file has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit Property</title>


        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="summernote/summernote-bs4.css">
        <link rel="stylesheet" href="fontawesome/css/all.min.css">
        <link href="css/styles.css" rel="stylesheet" />
    
        <style>
       
            .file_button{
                margin-left:15px;
            }
            input#file {
                display: inline-block;
                width: 100%;
                padding: 120px 0 0 0;
                height: 100px;
                overflow: hidden;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                background: url('https://cdn1.iconfinder.com/data/icons/hawcons/32/698394-icon-130-cloud-upload-512.png') center center no-repeat #e4e4e4;
                border-radius: 20px;
                background-size: 60px 60px;
            }
            
        </style>
        <style>
        a:link, a:visited {
        text-decoration: none;
        }

       
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Sensive Properties</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            >
            <ul class="navbar-nav ml-auto ml-md-12">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="editproperty.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="subscribers.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                subscribers
                            </a>
                            <a class="nav-link" href="properties.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-university"></i></div>
                                Properties
                            </a>

                            <a class="nav-link" href="news.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                                News
                            </a>

                            <a class="nav-link" href="queries.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-info-circle"></i></i></div>
                                Enquiry
                            </a>
                            
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    <br>
                    <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Add Property</li>
                        </ol>
                    <form  method="post" action="addproperty.php" enctype="multipart/form-data">
                    <div class="row form-group col-md-12">
                        <div class="form-group col-md-6">
                            <input type="text" id="title" class="form-control"  name="title" placeholder="title of property">
                        </div>
                        <div  class="form-group col-md-6" style="width:50%;">
                            <select class="form-control" name="category">
                                <option value="">Select Category</option>
                                <option value="Massionates">Massionates</option>
                                <option value="Bungalow">Bungalow</option>
                                <option value="Industrial Land">Industrial Land</option>
                                <option value="Commercial Land">Commercial Land</option>
                                <option value="Residental land">Residental land</option>
                                <option value="Apartment">Apartment</option>
                                <option value="Ambassadorial">Ambassadorial</option>
                                <option value="Office/Shop/Retail space">Office/Shop/Retail space</option>
                            </select>
                        </div>
                    </div>
                        <div class="form-group col-md-12">
                            <div class="form-group">
                                <label for="location">Property location</label>
                                <input type="text" class="form-control" aria-describedby="PropertyHelp" value="Nairobi, Kenya" name="location" id="location-address" aria-describedby="locationHelp" data-latitude-input="#location-lat" data-longitude-input="#location-lon" placeholder="The location of the property" required>                           
                                <small class="form-text text-muted" id="PropertyHelp">Type the name or click the location on the map.</small> 
                            </div>  
                            <div class="form-group" >
                                <div id="location" style="height: 400px;"></div>
                                <input type="hidden" class="form-control" name="latitude" style="width: 110px" id="location-lat" />
                                <input type="hidden" class="form-control" name="longitude" style="width: 110px" id="location-lon" />
                            </div>                                       
                                        
                        </div> 
                        <br>
                        <div class="row form-group col-md-12" >
                            <div  class="form-group col-md-6">
                                <select class="form-control" name="sale_type">
                                    <option value="">Select sale type</option>
                                    <option value="rent">rent</option>
                                    <option value="lease">lease</option>
                                    <option value="lure">lure</option>
                                    <option value="sale">sale</option>
                                </select>
                            </div>
                            <div  class="form-group col-md-6">
                                <select class="form-control" name="bedrooms">
                                    <option value="">Select No. of bedrooms</option>
                                    <option value="1 bedroom">1 bedroom</option>
                                    <option value="2 bedrooms">2 bedrooms</option>
                                    <option value="3 bedrooms">3 bedrooms</option>
                                    <option value="4 bedrooms">4 bedrooms</option>
                                </select>
                            </div>
                        </div>
                        <div  class="row form-group col-md-12">
                            
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="price" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="price in $dollars">
                            </div>

                            <div class="form-group col-md-6" >
                                <input type="number" class="form-control" name="area" placeholder="Area in sqft">
                            </div>
                            
                        </div>
                        <br>
                        <div class="form-group col-md-12" >
                            <textarea class="form-control textarea" rows="6" id="summernote" name="description" ></textarea>                    
                        </div>
                        <br>
                        <div class="form-group col-md-12"> 
                            <input type="file" id="file" accept="image/x-png,image/gif,image/jpeg" multiple onchange="loadFile(event)" class="form-control"  name="filetoupload" multiple>
                            <img id="output" width="350"/><br>
                        </div>
                        <br>
                        <div class="form-group col-md-12">
                            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        </div>
                    </form>
                        
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Sensive Homes corp</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="summernote/summernote-bs4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3&sensor=true&libraries=places&key=AIzaSyBO5Else2rW4UNyXiCMp3y20JV7BseTMys"></script>
        <script src="js/jquery.placepicker.js"></script>
        
        <script src="assets/demo/datatables-demo.js"></script>
        <script>
            $(document).ready(function() { 
        $('#summernote').summernote({
          height:350,
          minheight:null,
          toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['view', ['fullscreen', 'help']],
          ]
        });
      });

      var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
            var output = document.getElementById('output');
            output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }; 
        </script>
        <script>
            $("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});


function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(".") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = "$" + left_side + "." + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = "$" + input_val;
    
    // final formatting
    if (blur === "blur") {
      input_val += ".00";
    }
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}
        </script>
<script >
    $("#location-address").each(function() {
      var target = this;
      var $map = $('#location');

      var placepicker = $(this).placepicker({
        map: $map.get(0),
        placeChanged: function(place) {
          //console.log("place changed: ", place.formatted_address, this.getLocation());
          var latitude = this.getLocation().latitude;
          var longitude = this.getLocation().longitude;
          $('#location-lat').val(latitude);
          $('#location-lon').val(longitude);

        }
      }).data('placepicker');
    });
</script>
    </body>
</html>