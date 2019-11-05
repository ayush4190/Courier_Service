<?php
session_start();
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
	<title>Admin Mode</title>
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
</head>
<body>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
<h3 align="center"> List of All Employees</h3>
					<table>
						<thead>
              <?php

              			$query="SELECT * from empuserinfo ";
              					$query_run=mysqli_query($con,$query);

              					if($query_run)
              					{

              							echo "<table><tr><th>Name</th><th>Contact</th><th>Address</th><th>City</th><th>Approval Status</th></tr>"; // start a table tag in the HTML
              					while($row = mysqli_fetch_array($query_run)){   //Creates a loop to loop through results
              					{
              						echo "<tr><td>" . $row['pname'] . "</td><td>" . $row['phno'] . "</td><td>" .$row['address'] ."</td><td>" .$row['city'] ."</td><td>" .$row['vstatus'] ."</td></tr>" ;  //$row['index'] the index here is a field name
              					//	echo "<tr><td>" . $row['pname'] . "</td><td>" . $row['phno'] . "</td><td>" .$row['address'] ."</td><td>" .$row['vstatus'] ."</td></tr>" ;  //$row['index'] the index here is a field name

              					}
              					//echo "</table>";
              				}
              			}
              				else
              					echo "the query was wrong ;)";
               ?>


						</tbody>
					</table>
				</div>
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
	<script src="js/mainlist.js"></script>

</body>
</html>
