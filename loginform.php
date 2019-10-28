<?php
session_start();
if(isset($_SESSION['username']))
			{
echo"<script>window.location='customer'</script>";
			//	header('location:customer');
			}
else if(isset($_SESSION['empusername']))
			{
				echo"<script>window.location='employee'</script>";
			//	header('location:employee');
			}
else
	{
		#	echo '<script type="text/javascript"> alert("All in vain") </script>';
	}
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Customer</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<!-- ===========================adding from previous files============================-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript">
$(function() {
   $("#login_form").validate();
});
</script>
<!-- =======================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
<form class="login100-form validate-form" name="login_form" id="login_form" method="post" autocomplete="off" action="loginform.php" >
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid username is required is required: ">
						<input class="input100" type="text" name="username" placeholder="Type Your username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" class="required" data-validate = "Password is required">
						<input class="input100" type="password" name="password" maxlength="40" value="" class="required" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="row1">
						<button class="login100-form-btn">
							Login
						</button>
						<input  name="login_submit" />

					</div>
					<!-- <div class="row1"><input type="text" name="username" placeholder="Type Your username" class="required"/></div>
					<div class="row1"><input type="password" name="password" maxlength="40" value="" class="required" placeholder="Password" /></div>
					<div class="row1"><input type="submit" Value="Login" name="login_submit" /></div> -->

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="register.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
				<?php
			                                 if(isset($_POST['login_submit']))
			                                 {
			                                 #echo '<script type="text/javascript"> alert("Sign Up Button Clicked") </script>';
			                                     $username=preg_replace('/[^A-Za-z0-9\-]/', '',$_POST['username']);

			                                     //echo $username;
			                                     $password=$_POST['password'];
			 					$conc="shiv";
			 					$mpassword=$password;
			 					$password=$mpassword;
			                                     //preg_replace('/[^A-Za-z0-9\-]/', '', $password);
			                                     $user_type=$_POST['user_type'];
																					 $user_type ="employee";
			                                     if($user_type=="employee")
			                                         {
			                                             $query="select * from empuserinfo where username='$username' and password='$password'";
			                                             $query_run=mysqli_query($con,$query);
			                                             if(mysqli_num_rows($query_run)>0)
			                                             {
			                                                 $query2="select * from empuserinfo where username='$username' and password='$password' and vstatus=0";
			                                                 $query_run2=mysqli_query($con,$query2);
			                                                 if(mysqli_num_rows($query_run2)>0)
			                                                 {
			                                                     echo '<script type="text/javascript"> alert("Employee not verified") </script>';
			                                                 }
			                                                 else
			                                                 {
			                                                 //success login
			                                                 //$_SESSION = [];
			                                                 //session_destroy();
			                                                 //will see the differences
			                                                 $_SESSION['empusername']=$username;
			                                                 $tqq="select * from empuserinfo where username='$username' and password='$password'";
			                                                 $qrq=mysqli_query($con,$tqq);
			                                                 $rw2=mysqli_fetch_array($qrq);
			                                                 $_SESSION['empcity']=$rw2['city'];
			                                                 //echo $rw2['city'];
			 																								echo"<script>window.location='employee'</script>";
			                                               //  header('location:employee');
			                                                 }
			                                                 //echo '<script type="text/javascript"> alert("found ya") </script>';
			                                             }
			                                             else
			                                             {
			                                                 //wrong credentials
			                                                 echo '<script type="text/javascript"> alert("Sorry, Invalid UserName or Password!!!") </script>';
			                                             }
			                                         }


			                                     else
			                                         {

			                                             $query="select * from userinfo where username='$username' and password='$password'";
			                                             $query_run=mysqli_query($con,$query);
			                                             if(mysqli_num_rows($query_run)>0)
			                                             {

			                                                 $_SESSION['username']=$username;
			 																								echo"<script>alert('login Succesful');window.location='customer'</script>";

			                                             }
			                                             else
			                                             {
			                                                 //wrong credentials
			                                                 echo '<script type="text/javascript"> alert("Sorry, Invalid UserName or Password!!!") </script>';
			                                             }
			                                         }
			                                 }
			                             ?>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/mainloginform.js"></script>

</body>
</html>
