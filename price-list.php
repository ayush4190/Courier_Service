<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/utillist.css">
	<link rel="stylesheet" type="text/css" href="css/mainlist.css">
<!--===============================================================================================-->
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
	<h3 align="center"> Our Price List</h3>

	<table><tr><th>Delivery Speed</th><th>Rate Per Kg Per Km</th><th>Item Type</th></tr>
<!--adding consignments-->

	<?php
	$un=$_SESSION['username'];
  $query="select * from Courier_val  where speed='Medium'";
  $query_run=mysqli_query($con,$query);
		  echo "<tr><td>" .$row['speed'] ."</td><td>" .$row['rate_kg'] ."</td><td>" .$row['type'] ."</td></tr>";
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







<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/mainlist.js"></script>

</body>
</html>
