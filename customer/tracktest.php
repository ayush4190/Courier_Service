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
require '../dbconfig/config.php';
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

		<style>
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: white;
  color: black;
}

</style>

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
                                <li><a href="test.php">home</a>

                                </li>
                                <li><a href="#">about</a>
                                    <ul>


                                        <li><a href="../about-team.html">About Team</a></li>

                                    </ul>
                                </li>
                                <li><a href="requestform.php">Request Pick-up</a>

                                </li>



																	    <li><a href="test.php"><?php echo $_SESSION['username']	?> </a></li>





                                <li><a href="../contact.php">Contact</a>

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
                            <h2>Track your Consignment</h2>
														<div class="about-grids">
										            <div class="about-grids-row1">

											                   <div id="abc">

																	<form class="myform" action="tracktest.php" method="post">
																		<br>
																		<div align="center"><input type="text" name="cid" placeholder="Enter Item ID"></div>
										                                <br>
										                                <input type="submit" name="trackc" id="register-button" value="Track" color="#008CBA"/>
																		<br>
																			</form>

																			<p id="Status"></p>
																		<?php
																		if(isset($_POST['trackc']))
																		{
																			$cid=$_POST['cid'];
																			$query="select * from consig where id=".$cid." and ord_by='".$_SESSION['username']."'";
																			$query_run=mysqli_query($con,$query);
																			if($rows=mysqli_fetch_array($query_run))
																			{
																				$q2="select * from vcons where id=".$cid;
																				$qr=mysqli_query($con,$q2);
																				$r2=mysqli_fetch_array($qr);

																				    if($rows['status']==-1)
										                        echo '<script type="text/javascript"> document.getElementById("Status").innerHTML=("Item Not Picked Up Yet") </script>';
																						if($rows['status']==0)
																						echo '<script type="text/javascript"> document.getElementById("Status").innerHTML =("Item has been picked up by:'.$r2['vby'].'") </script>';
																						else if($rows['status']==1)
																						{
																							echo '<script type="text/javascript"> document.getElementById("Status").innerHTML =("Item has been picked up by:'.$r2['vby'].'") </script>';
																						echo '<script type="text/javascript"> document.getElementById("Status").innerHTML=("Last Verified Location \n of your item:'.$rows['cc'].'\nDelivery on or before='.$r2['etd'].'") </script>';
																					}
																						else if($rows['status']==2)
																							echo '<script type="text/javascript"> document.getElementById("Status").innerHTML=("Your Item Has Been Successfully Delivered") </script>';
																			}
																			else
																			{
																					echo '<script type="text/javascript"> alert("Sorry you enterd wrong id of your item") </script>';
																			}
																		}
																		?>
																</div>
										            </div>
										        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--END TOP AREA-->



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
                                <li><a href="../faq.php">FAQS</a></li>
                                <li><a href="../privacy-policy.php">Privacy Policy</a></li>
                                <li><a href="../terms-and-condition.php">Rules & Condition</a></li>
                                <li><a href="../contact.php">Contact Us</a></li>
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
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?library=places&key=AIzaSyCSL1BVJnFL7qrp-1P4ZuA4LCxbUdblbJE&sensor=false"></script>
    <script src="js/maps.active.js"></script>
</body>

</html>
