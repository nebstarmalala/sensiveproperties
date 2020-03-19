<?php

    if (isset($_POST['submit'])) {
      include('connect.php');
     

        $title =mysqli_real_escape_string ($dbconnect,$_POST['title']);
        $description =mysqli_real_escape_string ($dbconnect,$_POST['description']);
        $created_at =date("Y-m-d H:i:s",time());

         $insert = mysqli_query($dbconnect,"INSERT INTO `news` (`title`, `description`,`created_at`) VALUES ('$title','$description','$created_at')");
            if($insert){
                header('location:news.php');
            }else{
                echo "an error occured";
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
        <title>Add Property</title>


        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="summernote/summernote-bs4.css">
        <link rel="stylesheet" href="fontawesome/css/all.min.css">
        <link href="css/styles.css" rel="stylesheet" />
    
        <style>
       
            .file_button{
                margin-left:15px;
            }
           
            
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Start Bootstrap</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
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
                            <a class="nav-link" href="dashboard.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a>
                            
                            <a class="nav-link" href="topproperties.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                                Top Properties
                            </a>
                            
                            <a class="nav-link" href="properties.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-university"></i></div>
                                Properties
                            </a>

                            <a class="nav-link" href="news.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></i></div>
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
                        <form  method="post" action="addnews.php" enctype="multipart/form-data">
                            <div class="form-group col-md-12">
                                <label for="fname">Title</label>
                                <input type="text" id="title" class="form-control"  name="title" placeholder="eg...: 100% waiver">
                            </div>

                            <br>

                            <div class="form-group col-md-12" >
                                <label for="comment" >Description</label>
                                <textarea class="form-control textarea" rows="6" id="summernote" name="description" ></textarea>                    
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
  <script src="js/bootstrap.min.js"></script>
  <script src="summernote/summernote-bs4.min.js"></script>

  <script>
        $('.file-upload').file_upload()
  </script>
 
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

     
  </script>
</body>
</html>