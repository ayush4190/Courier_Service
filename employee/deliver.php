<?php
session_start();
	if(isset($_SESSION['empusername']))
				{
					//echo "okey stay";
				}
			else
				{
					echo"<script>window.location='../'</script>";
					//header('location:../');
				}
require '../dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
        <title>Welcome <?php echo $_SESSION['empusername']; ?></title>
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="../js/jquery.min.js"></script>-->
<script src="../js/jquery-1.8.3.js"></script>
 <!-- Custom Theme files -->
<link rel="stylesheet" type="text/css" href="../css/style2.css">
<link href="../css/style.css" rel='stylesheet' type='text/css' />
 <!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!----webfonts--->
<!--<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css' />-->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,900italic,900,700italic,700,500italic,500,400italic' rel='stylesheet' type='text/css' />

    </head>
<body>

<div class="header  about-head "  >
        <div class="container">

                <div class="logo">
                    <img src="../img/logo.png" alt="Logo"  /> <a href="../index.php"><span></span>Carries</a>
                </div>

								<div class="top-nav">
								    <span class="menu"> </span>
								    <ul>
								        <li ><a href="index.php">Home</a></li>
								        <!--<li ><a href="faq.php">FAQ</a></li>-->
								        <li ><a href="../contact.php">Contact</a></li>
								                <li><a href="#"><?php echo $_SESSION['empusername'];  ?></a>

								                                </li>
								            </ul>
								</div>
<div class="clearfix"> </div>
<!--- top-nav ----->
        <!----- script-for-nav ---->
<script>
        $( "span.menu" ).click(function() {
          $( ".top-nav ul" ).slideToggle( "slow", function() {
            // Animation complete.
          });
        });
</script>
<!----- script-for-nav ---->
        </div>
    </div>
<!---- header ----->
<!------ about ---->
<div class="about">
    <!--- bradcrumbs ---->
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-left">
                <h1>Welcome, <?php
                            $un=$_SESSION['empusername'];
                            $query="select * from empuserinfo where username='$un'";
                            $query_run=mysqli_query($con,$query);
                            $row = mysqli_fetch_array($query_run);
                            echo $row['pname'];
                            ?></h1>
            </div>
            <div class="breadcrumbs-right">
                <ul>
                    <li><a href="index.php">Employee</a> <label>:</label></li>
                    <li>Home</li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--- bradcrumbs ---->
</div>
<div class="about-top-grids">
    <div class="container">
        <!---- about-grids ---->
        <div class="about-grids">
            <div class="about-grids-row1">

	                   <div id="abc">
							<center><h2>Deliver, Enter Item Id</h2></center>
							<center><img class="avatar" src="../images/avatar.jpg"></center>

							<form class="myform" action="deliver.php" method="post">
                                <br>
                                <div align="center"><input type="text" name="cid" placeholder="Enter Item ID"></div>
                                <br>
                                <input type="submit" name="udcc" id="register-button" value="Update Delivery" />
                                <br>
                                    </form>

                                <?php
                                if(isset($_POST['udcc']))
                                {
                                    $cid=$_POST['cid'];
                                    $query="select * from consig where id=".$cid." and dc='".$_SESSION['empcity']."'";
                                    $query_run=mysqli_query($con,$query);
                                    if($rows=mysqli_fetch_array($query_run))
                                    {
                                        //$q2="select * from vcons where id=".$cid;
                                        //$qr=mysqli_query($con,$q2);
                                                if($rows['status']==-1)
                                                  echo '<script type="text/javascript"> alert("Item Not Picked Up Yet") </script>';
                                                else if($rows['status']==0)
                                                    {
                                                            echo '<script type="text/javascript"> alert("Item Not reached to destination city") </script>';

                                                    }
                                                    else if($rows['status']==1)
                                                    {

                                                        $query2="update consig set status=2 where id=".$cid;
                                                        $query_run2=mysqli_query($con,$query2);
                                                        if($query_run2)
                                                        {
                                                                $quer2="select * from consig where id=".$cid;
                                                                $quer_run2=mysqli_query($con,$quer2);
                                                                if($val=mysqli_fetch_assoc($quer_run2))
                                                                {
                                                                    $quer3="select * from userinfo where username='".$val['ord_by']."'";
                                                                $quer_run3=mysqli_query($con,$quer3);
                                                                $vv2=mysqli_fetch_assoc($quer_run3);

                                                                $to=$vv2['eml'];
                                                                $sub='Successful Delivery';
                                                                $msg="Hi ".$vv2['pname'].", your item has been Delivered successfully.\n ID:".$val['id'].". Kindly keep it for future reference";
                                                                $hed='from: no-reply';
                                                                $sent=mail($to,$sub,$msg,$hed);
                                                                if($sent)
                                                                    {
                                                                        echo '<script type="text/javascript"> alert("Item Delivered Successfully,mail sent") </script>';
                                                                    }
                                                                else
                                                                {
                                                                    echo '<script type="text/javascript"> alert("Item Delivered Successfully,error:mail not sent") </script>';
                                                                }

                                                            }
                                                            else
                                                                echo '<script type="text/javascript"> alert("Item Delivered Successfully//") </script>';
                                                    }
                                                    }
                                                else if($rows['status']==2)
                                                    echo '<script type="text/javascript"> alert("This Item has been already Delivered before") </script>';
                                    }
                                    else
                                    {
                                            echo '<script type="text/javascript"> alert("Sorry item not destined here.") </script>';
                                    }
                                }

								?>

						</div>
            </div>
        </div>
        <!---- about-grids ---->

    </div>
<!------ about ---->
</div>

<<div class="footer">
    <div class="top-footer">
            <div class="container">
                    <div class="top-footer-grids">
                            <div class="top-footer-grid">
                                    <h3>Contact us</h3>
                                    <ul class="address">
                                        <li><span class="map-pin"> </span><label>MT3 <br>Rooms B018 and B016 <br>NITK, Surathkal ,Karnakata (575025) </label></li>
                                        <li><span class="mob"> </span>Ph & Fax no - 0995-5377130, Mob- 8000000008</li>
                                        <li><span class="msg"> </span><a href="https://mail.google.com/mail/?view=cm&fs=1&to=aashaym1@gmail.com.com">aashaym1@gmail.com</a></li>
                                    </ul>
                            </div>
                            <div class="top-footer-grid">
                                    <h3>Important Links</h3>
                                    <ul class="latest-post">
                                        <li><a href="../index.php">Home</a> </li>


                                    </ul>
                            </div>
                            <div class="top-footer-grid">
                                    <h3>Other Links</h3>
                                    <ul class="latest-post">

                                        <li><a href="../terms-and-condition.php">Terms & Conditions</a> </li>

                                        <li><a href="../contact.php">Contact Us</a> </li>
                                    </ul>
                            </div>
                            <div class="clear"> </div>
                    </div>
            </div>
    </div>
    <!----start-bottom-footer---->
    <div class="bottom-footer">
            <div class="container">
                    <div class="bottom-footer-left">

                             <p> &copy; 2019 Carries.in. All rights reserved | Powered by: <a href="http://www.nitk.ac.in" target="_blank">NITK</a></p>

                    </div>
                    <div class="clear"> </div>
            </div>
    </div>
    <!----//End-bottom-footer---->
</div>
	</body>
</html>
