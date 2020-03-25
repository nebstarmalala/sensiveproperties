    <!-- Footer Section Begin -->
    <?php

  include('connect.php');
  $msg = '';
  $error = '';
 
  if (isset($_POST['subscribe'])) {
      
      
    $email =mysqli_real_escape_string ($dbconnect,$_POST['subscribe']);
    $created_at =date("Y-m-d H:i:s",time());
    
    function isValidEmail($email){ 
      global $error;
        $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
    
        if (!preg_match( $pattern,$email)){
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            $error .="email not valid";
        } 
          
     } 
     
     isValidEmail($email);

      if (empty($error)) {
          $check_email = mysqli_query($dbconnect,"SELECT email FROM `subscribers` WHERE `email` = '$email'");
          if (mysqli_num_rows($check_email) > 0) {
              header('Location: ' . $_SERVER['HTTP_REFERER']);
              $error .= "Email already exists";
          }

          if (empty($error)) {   
              $encrypted_password = sha1($password);

              $insert = mysqli_query($dbconnect,"INSERT INTO `subscribers` (`email`,`subscribed_at`) VALUES ('$email','$created_at')");
              if($insert){
                global $msg;
                  header('Location: ' . $_SERVER['HTTP_REFERER']);
                  $msg .= "subscribed";
              }else{
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                $error .= "an error occured";
              }
          }
          
      }
  }
?>
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
                        <?php 
                            if (!empty($msg)){ ?>
                            <div class="alert alert-success alert-dismissible col-md-12">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Success!</strong> <?php  echo $msg  ?>
                            </div>
                        <?php } ?>
                        <div class="footer-logo">
                        <h3>Newsletter</h3>
                            <p>Subscribe our newsletter gor get notification about new updates.</p>
                            <form action="footer.php" class="newslatter-form" method="post">
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