<?php session_start();
session_start();
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
    <link rel="shortcut icon" type="image/ico" href="/img/favicon.png" />

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
                            <a href="test.php" class="navbar-brand"><img src="/img/logo.png" alt="logo"></a>
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
                                <li><a href="../contact.php">Contact</a>
                                <li><a href="#">Service</a>
                                  <ul>


                                      <li><a href="tracktest.php">Track Item</a></li>
                                      <li><a href="requestform.php">Request Pick-Up</a></li>

                                  </ul>

                                </li>
                                <li><a href=""><?php echo $_SESSION['username'];  ?></a>
                                    <ul>
                                        <li><a href="editprof.php">Profile</a></li>
                                        <li><a href="../index.php"><?php session_destroy();  ?>logout</a></li>


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
				<div class="welcome-slider-area">
            <div class="welcome-single-slide slider-bg-one">
                <div class="container">
                    <div class="row flex-v-center">
                        <div class="col-md-10 col-md-offset-1">
													<div class="welcome-text text-center">
															<h1>Welcome</br>
																<?php
																						$un=$_SESSION['username'];
																						$query="select * from userinfo where username='$un'";
																						$query_run=mysqli_query($con,$query);
																						$row = mysqli_fetch_array($query_run);
																						echo $row['pname'];
																						?></h1>

															</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="welcome-single-slide slider-bg-one">
                <div class="container">
                    <div class="row flex-v-center">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="welcome-text text-center">
                                <h1>Welcome</br>
																	<?php
									                            $un=$_SESSION['username'];
									                            $query="select * from userinfo where username='$un'";
									                            $query_run=mysqli_query($con,$query);
									                            $row = mysqli_fetch_array($query_run);
									                            echo $row['pname'];
									                            ?></h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Table-->

        <!--Table-->

				 <!-- =========-->
    </header>
    <!--END TOP AREA-->
<!-- ===============================-->
<!--BLOG AREA-->
<section class="blog-area gray-bg padding-top">
	<!--BLOG AREA-->
	<style>
	table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
                margin-bottom:70px;
	}

	td, th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;

	}

	tr:nth-child(even) {
		background-color: #dddddd;
	}
	</style>
	<h3 align="center"> Items you have shipped till today using our SERVICE</h3>

	<table><tr><th>Courier-ID</th><th>Source</th><th>Destination</th><th>Current Courier Branch</th><th>Date of Request</th><th> Status</th></tr>
<!--adding consignments-->

	<?php
	$un=$_SESSION['username'];
  $query="select * from consig where ord_by='$un' ";
  $query_run=mysqli_query($con,$query);
		while($row = mysqli_fetch_array($query_run))
		{
			if($row['status'] == -1)
			$_status = "Yet to be Picked";
			if($row['status'] == 0)
			{


			$_status = "In-transit";
		}
			if($row['status'] == 2)
			$_status = "Delivered";
  echo "<tr><td>" .$row['id'] ."</td><td>" .$row['sc'] ."</td><td>" .$row['dc'] ."</td><td>" .$row['cc'] ."</td><td>" .$row['added_on'] ."</td><td>" .$_status ."</td></tr>";
}

	 ?>

	 <!-- consignments end here -->
	<!--BLOG AREA END-->

		<div class="container">





		</div>
</section>

<!--==============================-->
    <!--BLOG AREA-->
		<style>
		table {
			font-family: arial, sans-serif;

			border-collapse: collapse;
			width: 100%;
		}

		td, th {
			border: 1px solid #aaaa;
			text-align: center;


			padding: 30px;
		}

		tr:nth-child(even) {
			background-color: red;
color:white;
		}
		</style>
		<table><tr><th></th></t








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
                                <li><a href="#">Support Forums</a></li>
                                <li><a href="#">Communication</a></li>
                                <li><a href="#">FAQS</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Rules & Condition</a></li>
                                <li><a href="#">Contact Us</a></li>
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
    <script src="js/contact-form.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="js/main.js"></script>
</body>

</html>
