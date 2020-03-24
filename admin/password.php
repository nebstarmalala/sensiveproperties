<?php 

require_once(__DIR__ . '../../vendor/autoload.php');
use PHPMailer\PHPMailer\PHPMailer;
/*echo sha1("password");*/
include('connect.php');
   if (isset($_POST['reset'])) {

        $email = $_POST['reset_email'];
        $token = md5(microtime(true).mt_Rand());
        $msg = '';
        $error = '';

        function isValidEmail($email){ 
            global $error;
              $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
          
              if (!preg_match( $pattern,$email)){
                  $error .="email not valid";
              } 
                
           } 

           isValidEmail($email);
  
            if (empty($error)) {   
  
                $insert= mysqli_query($dbconnect,"INSERT INTO `password_reset`(`email`,`reset_token`) VALUES ('$email','$token')");
                if($insert){

                    try{
                        // Retrieve the email template required
                        $email_message = file_get_contents('reset_mail.html');

                        // Replace the % with the actual information
                        $email_message = str_replace('%token%', $token, $email_message);
                       

                         // send email
                        $mail = new PHPMailer();
                        $mail->isSMTP();
                        $mail->Host = 'smtp.mailtrap.io';
                        $mail->SMTPAuth = true;
                        $mail->Username = 'd4ddd996baff19';
                        $mail->Password = '912f2078611dbc';
                        $mail->SMTPSecure = 'tls';
                        $mail->Port = 2525;

                        $mail->setFrom('info@sensiveproperties.com', 'Sensive Properties');
                        $mail->addReplyTo('info@sensiveproperties.com', 'Sensive Properties');
                        $mail->addAddress('sensiveproperties@gmail.com');
                        $mail->Subject = 'Password Reset - Sensive Properties';
                        $mail->isHTML(true);
                        $mail->isHTML(true);                                  // Set email format to HTML
                        $mail->MsgHTML($email_message);
					    $mail->AltBody = strip_tags($email_message);
                    
                        $mail->send();
                        global $msg;
                        $msg .= "we have sent a password reset email";
                    }catch (Exception $e) {
                        global $error;
                        $error .= "we could not send an email. Try Again";

                    }
                  
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
        <title>Page Title - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Password Recovery</h3></div>
                                    <div class="card-body">
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
                                        <div class="small mb-3 text-muted">Enter your email address and we will send you a link to reset your password.</div>
                                        <form action="password.php" method="post">
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" id="inputEmailAddress" type="email" name="reset_email"  placeholder="Enter  email address" /></div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="index.php">Return to login</a><button class="btn btn-primary" type="submit" name="reset">reset</button></div>
                                        </form>
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
