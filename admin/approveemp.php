<?php session_start();

if(isset($_SESSION['admusername']))
			{

			}
else
	{
		echo"<script>window.location='index.php'</script>";
	//	header('location:index.php');
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




	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="approveemp.php" method="post">
				<span class="contact100-form-title">
			Approve Employees For Service
				</span>





				<div class="wrap-input100 input100-select">
					<span class="label-input100">Name of Employees</span>
					<div>
						<select class="selection-2" name="name" required>
							<option>Choose Employee</option>
							<?php
								$query="select * from empuserinfo where vstatus=0";
										$query_run=mysqli_query($con,$query);
											while($row = mysqli_fetch_array($query_run)){
												echo "<option value='" . $row['pname'] . "'>" . $row['pname'] . "</option>";}
							 ?>

						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

        <div class="wrap-input100 input100-select">
					<span class="label-input100">Contact info</span>
					<div>
						<select class="selection-2" name="Contact" required>
							<option>Contact Number</option>
							<?php
								$query="select * from empuserinfo where vstatus =0";
										$query_run=mysqli_query($con,$query);
											while($row = mysqli_fetch_array($query_run)){
												echo "<option value='" . $row['phno'] . "'>" . $row['phno'] . "</option>";}
							 ?>

						</select>
					</div>
					<span class="focus-input100"></span>
				</div>







				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" input type="submit" name="submit_button" id="register-button" >
								Approve Employee
						</button>
					</div>
				</div>
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" input type="submit" name="submit_button" id="register-button" >
								<a href="admhome.php"> Back to home Page </a>
						</button>
					</div>
				</div>

			</form>
		</div>

		<!--  ====================================  -->

		<?php
 									if(isset($_POST['submit_button']))
 									{


                      $name = $_POST['name'];
                      $phone = $_POST['Contact'];


 										//echo $user_type ;

 												$query1=" update empuserinfo set vstatus =1 where pname='$name' and phno='$phone' ";
 												$query_run1=mysqli_query($con,$query1);
 													if($query_run1)
 														{
                              echo '<script type="text/javascript"> alert("Employee ") </script>';






 														}

 												}

 											?>	<!--  ======================================  -->
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
