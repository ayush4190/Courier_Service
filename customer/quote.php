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
require '../dbconfig/config.php';
?>
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
			<form class="contact100-form validate-form" action="quote.php" method="post">
				<span class="contact100-form-title">
			Get Quote
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Approx weight of the Good</span>
					<input class="input100" type="number" name="weight" placeholder="Enter Weight of Good" >
					<span class="focus-input100"></span>
				</div>



				<div class="wrap-input100 input100-select">
					<span class="label-input100">Destination City</span>
					<div>
						<select class="selection-2" name="dc" required>
							<option>Choose Destination City</option>
							<?php
								$query="select * from city";
										$query_run=mysqli_query($con,$query);
											while($row = mysqli_fetch_array($query_run)){
												echo "<option value='" . $row['cityname'] . "'>" . $row['cityname'] . "</option>";}
							 ?>

						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select" data-validate = "Mode of Delivery is required">
					<span class="label-input100">Mode of Delivery</span>
					<div>
						<select class="selection-2" name="ds">
							<option value="">Select Type</option>
							<option value="3">Turbo</option>
							<option value="2">Fast</option>
							<option value="1">Medium</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 input100-select">
					<span class="label-input100">Item Type</span>
					<div>
						<select class="selection-2" name="item_type">
							<option >Select Type</option>
							<option >Fragile</option>
							<option >Document</option>
							<option >Normal</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>




				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" input type="submit" name="submit_button" id="register-button" >
								Get Quote
						</button>
					</div>
				</div>
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" input type="submit" name="submit_button" id="register-button" >
								<a href="test.php"> Back to home Page </a>
						</button>
					</div>
				</div>

			</form>
		</div>

		<!--  ====================================  -->

    <?php
    $_weight = $_POST['weight'];
 $un = $_SESSION['sct'];
 $dist = $_POST['dc'];
 if($_POST['ds'] == 1)
 {
   $s_speed = "Medium";
 }
 if($_POST['ds'] == 2)
 {
  $s_speed = "Fast";
 }
 if($_POST['ds'] == 3)
 {
   $s_speed = "Turbo";
 }
 $i_type = $_POST['item_type'];

	if($un == $dist)
	{
		echo '<script type="text/javascript"> alert("estimated cost Rs =0 have to be paid at the time of pick-up because we offer free hoarding") </script>';

	}
	else {
		// code...


    $query="select * from distlist where city1='$un' and city2='$dist'";
    $query_run=mysqli_query($con,$query);
  		while($row = mysqli_fetch_array($query_run))
  		{

  			//$_status = $row['dist'];
        $query1="select * from Courier_val where speed='$s_speed' and type='$i_type'";
        $query_run1=mysqli_query($con,$query1);
          while($row1 = mysqli_fetch_array($query_run1))
          {
            $_value = $row1['rate_kg'];

      			$_status = $row1['rate_kg'];
            $_totalcost = $row1['rate_kg']*$row['dist'] * $_weight;
            echo '<script type="text/javascript"> alert("estimated cost Rs = '.$_totalcost.' have to be paid at the time of pick-up") </script>';

          }

  }
}

  	 ?>
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
