<?php session_start();
if(isset($_SESSION['username']))
      {
        //echo "okey stay";
      }
    else
      {
        echo"<script>window.location='../'</script>";
      //	header('location:../');
      }
require '../dbconfig/config.php';?>
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
    <title>Carries SERVICE </title>

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

<body class="home-one">


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
                                <li><a href="index.html">home</a>

                                </li>
                                <li><a href="about.html">about</a>
                                    <ul>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="about-company-profile.html">About Profile</a></li>
                                        <li><a href="about-company-history.html">About History</a></li>
                                        <li><a href="about-company-report.html">About Report</a></li>
                                        <li><a href="about-team.html">About Team</a></li>
                                        <li><a href="about-support.html">About Support</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.php">Contact</a>
                                <li><a href="service.html">Service</a>
                                  <ul>

                                      <li><a href="about-company-profile.html">Edit Profile</a></li>
                                      <li><a href="about-company-history.html">Track Item</a></li>
                                      <li><a href="about-company-report.html">Request Pick-Up</a></li>
                                      <li><a href="about-team.html">Logout</a></li>

                                  </ul>

                                </li>

                                <li><a href=""><?php echo $_SESSION['username']; ?></a>
                                    <ul>
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">logout</a></li>

                                    </ul>
                                </li>




                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>
        <!--Table-->

        <!--Table-->
    </header>
    <!--END TOP AREA-->

    <!--BLOG AREA-->
    <section class="blog-area gray-bg padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-image">
                            <img src="img/blog/blog_1.jpg" alt="">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-ship"></i></a></div>
                            <h3><a href="single-blog.html">Ocean Freight</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout..</p>
                            <a href="single-blog.html" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-image">
                            <img src="img/blog/blog_2.jpg" alt="">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <h3><a href="single-blog.html">Air Freight</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout..</p>
                            <a href="single-blog.html" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-image">
                            <img src="img/blog/blog_3.jpg" alt="">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-truck"></i></a></div>
                            <h3><a href="single-blog.html">Street Freight</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout..</p>
                            <a href="single-blog.html" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG AREA END-->







    <!--FOOER AREA-->
    <div class="footer-area dark-bg">
        <div class="footer-area-bg"></div>
        <div class="footer-top-area wow fadeIn">

        </div>
        <div class="footer-bottom-area wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget footer-about">
                            <h3>About Us</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <ul>
                                <li><i class="fa fa-phone"></i> <a href="callto:+8801911854378">+8801911854378</a></li>
                                <li><i class="fa fa-map-marker"></i> <a href="mailto:backpiper.com@gmail.com">backpiper.com@gmail.com</a></li>
                                <li><i class="fa fa-phone"></i> Gazipur, 1704, Bangladesh. 1215.</li>
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
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem .</p>
                                        <a href="#" class="tweet-meta">5 Miniutes Ago</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="twitter-icon"><i class="fa fa-phone"></i></div>
                                    <div class="tweet-detail">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem .</p>
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
                                <!-- <li><a href="#">Support Forums</a></li>
                                <li><a href="#">Communication</a></li> -->
                                <li><a href="faq.php">FAQS</a></li>
                                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                <li><a href="terms-and-condition.php">Rules & Condition</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget instafeed-widget">
                            <h3>Customer Service</h3>
                            <ul>
                                <li><img src="img/instafeed/1.jpg" alt=""></a></li>
                                <li><img src="img/instafeed/2.jpg" alt=""></a></li>
                                <li><img src="img/instafeed/3.jpg" alt=""></a></li>
                                <li><img src="img/instafeed/4.jpg" alt=""></a></li>
                                <li><img src="img/instafeed/5.jpg" alt=""></a></li>
                                <li><img src="img/instafeed/6.jpg" alt=""></a></li>
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
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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
    <script src="js/contact-form.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="js/main.js"></script>
</body>

</html>
