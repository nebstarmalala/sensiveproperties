<?php 
include('connect.php');
 $token=$_GET['reset_token'];
 $error = '';

 if (empty($token)){
      header("location:login.php");
      echo $token;
 }

 $check_token = mysqli_query($dbconnect,"SELECT reset_token FROM `password_reset` WHERE `reset_token` = '$token' ");
    if (mysqli_num_rows($check_token) !== 1) {
        global $error;
        $error .= "invalid token";
    }

    if(empty($error)){
        
        if (isset($_POST['submit'])) {

            $email = $_POST['email'];
            $password = sha1($_POST['password']);
            $confirm_password= sha1($_POST['confirmpassword']);
            $error = '';
            $msg = '';
    
            if($password==$confirm_password){
                $update_admin = mysqli_query($dbconnect,"UPDATE `admin` SET `password`='$password' WHERE `email`='$email'");
                if ($update_admin) {
                    global $msg;
                    $msg .= "credentials have been updated successfully";
                    header("location:index.php");
                }else{
                   global $error;
                   $error .= "invalid username or password";  
                }   
    
            }else{
                global $error;
                $error .= "password do not match";
            }
        }
    }    

   

/*echo sha1("password");*/


   
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <style>
        a:link, a:visited {
        text-decoration: none;
        }

       
        </style>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Reset Password</h3></div>
                                    <div class="card-body">
                                    
                                        <form action="password_reset.php" method="post">
                                        <?php 
                                            if (!empty($error)){ ?>
                                            <div class="alert alert-danger alert-dismissible col-md-12">
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <strong>Error!</strong> <?php  echo $error  ?>
                                            </div>
                                        <?php } ?>
                                        <?php 
                                            if (!empty($msg)){ ?>
                                            <div class="alert alert-success alert-dismissible col-md-12">
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <strong>success!</strong> <?php  echo $msg  ?>
                                            </div>
                                        <?php } ?>
                                            <div class="form-group" ><label class="small mb-1" for="inputPassword">New Password</label><input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Enter new password" /></div>
                                            <div class="form-group" ><label class="small mb-1" for="inputPassword">Confirm Password</label><input class="form-control py-4" id="inputPassword" type="password" name="confirmpassword" placeholder="Confirm password" /></div>
                                            
                                        
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><button class="btn btn-primary" type="submit" name="submit">Login</button></div>
                                           
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>