<?php session_start();

require 'dbconfig/config.php';

?>
<!doctype html>

<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Transportation & Agency Template is a simple Smooth transportation and Agency Based Template" />
    <meta name="keywords" content="Portfolio, Agency, Onepage, Html, Business, Blog, Parallax" />

    <!--====== TITLE TAG ======-->
    <title>Carries Service</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/stellarnav.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body class="single-page">



    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area" id="home">
        <div class="top-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="header-top-area">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="#home" class="navbar-brand"><img src="img/logo.png" alt="logo"></a>
                        </div>

                        <div id="main-nav" class="stellarnav">
                            <ul id="nav" class="nav navbar-nav">
                                <li><a href="index.php">home</a>

                                </li>
                                <li><a href="#">about</a>
                                    <ul>
                                        <li><a href="about-team.html">Team</a></li>

                                    </ul>
                                </li>


                                </li>
                                <li><a href="">login</a>
                                    <ul>

                                        <li><a href="loginformcus.php">customer</a></li>
                                          <li><a href="loginform.php">employee</a></li>
                                    </ul>
                                </li>
                                <li><a href="register.php">Register</a></li>

                                <li><a href="contact.php">Contact</a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>
        <div class="welcome-area">
            <div class="area-bg"></div>
            <div class="container">
                <div class="row flex-v-center">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="welcome-text text-center">
                            <h2>Contact Us</h2>
                             <ul class="address">
                                        <li><span class="map-pin"> </span><label>MT3 <br>Rooms B018 and B016 <br>NITK, Surathkal ,Karnakata (575025) </label></li>
                                        <li><span class="mob"> </span>Ph & Fax no - 0995-5377130, Mob- 8000000008</li>
                                        <li><span class="msg"> </span><a href="https://mail.google.com/mail/?view=cm&fs=1&to=aashaym1@gmail.com.com">aashaym1@gmail.com</a></li>

                                <li><span class="msg"> </span><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=ayushkumar.171co111@nitk.edu.in@gmail.com">ayushkumar.171co111@nitk.edu.in</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--END TOP AREA-->

    <!--CONTACT US AREA-->
    <section class="contact-area" id="contact">
        <div class="map-area relative">
            <div id="map" style="width: 100%; height: 400px;"> </div>
        </div>
        <div class="contact-form-area section-padding gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="area-title text-center">
                            <h3>GET IN TOUCH</h3>
                            <p>Need any help just send a message via our email address</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <div class="contact-form">
                            <form action="contact.php" id="contact-form" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="name-field">
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Name.." required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="email-field">
                                            <div class="form-input">
                                                <input type="email" class="form-control" id="form-email" name="form-email" placeholder="Email.." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="form-group" id="phone-field">
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="form-phone" name="form-phone" placeholder="Subject..">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="form-group" id="message-field">
                                            <div class="form-input">
                                                <textarea class="form-control" rows="6" id="form-message" name="form-message" placeholder="Your Message Here..." required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        	 <input type="submit" name="submit_button" id="register-button" value="Send Message" />
                                    </div>
                                </div>
                            </form>
                        </div>

<!-- ================================================================= -->


<?php
               if(isset($_POST['submit_button']))
               {
                 $name = $_POST['form-name'];
                 $email = $_POST['form-email'];
                 $phone = $_POST['form-phone'];
                 $message =$_POST['form-message'];
                 //echo $user_type ;

                     $query="insert into messagerequest(name,email,phone_no,message) values('".$name."','".$email."','".$phone."','".$message."')";
                     $query_run=mysqli_query($con,$query);
                       if($query_run)
                         {


                               echo '<script type="text/javascript"> alert("Request added successfully,check your mail for response") </script>';





                         }
                       else
                         echo '<script type="text/javascript"> alert("Some Error Occured") </script>';

                     }

                   ?>




<!-- =================================================================== -->


                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="contact-image text-center">
                            <img src="img/contact-right.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CONTACT US AREA END-->

    <!--FOOER AREA-->
    <div class="footer-area dark-bg">
        <div class="footer-area-bg"></div>
        <div class="footer-top-area wow fadeIn">
            <div class="container">
                <!-- <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="subscribe-content">
                            <h2>Weekly Newsletter</h2>
                            <p>There are many variations of passages of Carrries available.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="subscriber-form-area">
                            <form action="#" class="subsriber-form">
                                <label for="subscriber-mail"><i class="fa fa-envelope-o"></i></label>
                                <input type="email" name="subscriber-mail" id="subscriber-mail" placeholder="Enter Your Mail">
                                <button type="submit">subscribe</button>
                            </form>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-border"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget footer-about">
                            <h3>About Us</h3>
                            <p>We Connect the world...</p>
                            <ul>
                                <li><i class="fa fa-phone"></i> <a href="callto:+8801911854378">+8801911854378</a></li>
                                <li><i class="fa fa-map-marker"></i> <a href="mailto:aashaym1@gmail.com">aashaym1@gmail.com</a></li>
                                <li><i class="fa fa-phone"></i> MT3,NITK</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget twitter-widget">
                            <h3>Latest Tweets</h3>
                            <ul>
                                <li>
                                    <div class="twitter-icon"><i class="fa fa-phone"></i></div>
                                    <div class="tweet-detail">
                                        <p>Carries is the best Courier service provider ever !!</p>
                                        <a href="#" class="tweet-meta">5 Miniutes Ago</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="twitter-icon"><i class="fa fa-phone"></i></div>
                                    <div class="tweet-detail">
                                        <p>I don't have to worry about my couriers carries does it all for me ..</p>
                                        <a href="#" class="tweet-meta">5 Miniutes Ago</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget list-widget">
                            <h3>Customer Service</h3>
                            <ul>
                                <li><a href="terms-and-condition.php">Rules & Condition</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget instafeed-widget">
                            <h3>Customer Service</h3>
                            <ul>
                                <li><a href="#"><img src="img/instafeed/1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/instafeed/2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/instafeed/3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/instafeed/4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/instafeed/5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/instafeed/6.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-border"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="footer-copyright wow fadeIn">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="footer-social-bookmark text-right wow fadeIn">
                            <ul class="social-bookmark">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FOOER AREA END-->


    <!--====== SCRIPTS JS ======-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>

    <!--====== PLUGINS JS ======-->
    <script src="js/vendor/jquery.easing.1.3.js"></script>
    <script src="js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/vendor/jquery.appear.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/stellarnav.min.js"></script>
    <!-- <script src="js/contact-form.js"></script> -->
    <script src="js/jquery.sticky.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="js/main.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?library=places&key=AIzaSyCSL1BVJnFL7qrp-1P4ZuA4LCxbUdblbJE&sensor=false"></script>
    <script src="js/maps.active.js"></script>
</body>

</html>
