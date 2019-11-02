<?php session_start();
if(isset($_SESSION['username']))
			{
				//echo "okey stay";
			}
		else
			{
				echo"<script>window.location='../'</script>";
				//header('location:../');
			}
require '../dbconfig/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Carries</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/utilform.css">
	<link rel="stylesheet" type="text/css" href="css/mainform.css">
<!--===============================================================================================-->
</head>
<body >

	<?php
							$un=$_SESSION['username'];
							$query="select * from userinfo where username='$un'";
							$query_run=mysqli_query($con,$query);
							$row = mysqli_fetch_array($query_run);
						//	echo $row['pname'];
							if(isset($_SESSION['sct']))
							{}
						else
							{$_SESSION['sct']=$row['city'];}

							if(isset($_SESSION['emml']))
							{}
						else
							{$_SESSION['emml']=$row['eml'];}
							?>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="trashtest.php" method="post">
        <span>Full Address of Desitination</span>
    		<br>
                            <textarea name="addr" maxlength="100" cols="5" style="width: 100%;"></textarea>
                        <br>

    		 <span>Destination</span>
    		<select name="dc" class="ipvalues2" required>
    		<option value="">Select Destination City</option>
    		<?php
    			$query="select * from city";
    					$query_run=mysqli_query($con,$query);
    						while($row = mysqli_fetch_array($query_run)){
    							echo "<option value='" . $row['cityname'] . "'>" . $row['cityname'] . "</option>";}
    		 ?>
    		 </select>
    		 <span>Delivery Speed</span>
    		<select name="ds" class="ipvalues2" required>
    		<option value="">Select medium/fast/turbo</option>
    		<option value="1">Medium</option>
    		<option value="2">Fast</option>
    		<option value="3">Turbo</option>

    		 </select>
    		 <input type="submit" name="submit_button" id="register-button" value="Schedule Pick Up" />
    		 <a href="test.php"><input type="button" id="back-button" value="<<Back to Home" /></a>
    		 </form>
    		 </div>

		<!--  ====================================  -->

		<?php
									 if(isset($_POST['submit_button']))
									 {
										 $un=$_SESSION['username'];
										 $addr=$_POST['addr'];
										 $city=$_POST['dc'];
										 $ds=$_POST['ds'];
										 $sc=$_SESSION['sct'];


												 $query="insert into consig(ord_by,sc,dc,cc,serv_type,) values('".$un."','".$sc."')";
												 $query_run=mysqli_query($con,$query);
													 if($query_run)
														 {
														 $query2="select max(id) from consig where ord_by='$un'";
														 $query_run2=mysqli_query($con,$query2);
														 if($val=mysqli_fetch_array($query_run2))
																	 echo '<script type="text/javascript"> alert("Request added successfully,check your mail") </script>';

															 else
															 {
																 echo '<script type="text/javascript"> alert("Request added successfully,error:mail not sent") </script>';
															 }



														 }
													 else
														 echo '<script type="text/javascript"> alert($sc) </script>';

												 }

											 ?>
		<!--  ======================================  -->
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/mainform.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
