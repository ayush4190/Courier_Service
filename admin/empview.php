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
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
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
</head>
<body>

<h2>List of Employees</h2>

<body style="background-color: #deefde">
<?php

			$query="SELECT * from empuserinfo where city='".$_SESSION['city']."' and vstatus=1 ";
					$query_run=mysqli_query($con,$query);

					if($query_run)
					{
					echo "EMPLOYEES OF ". $_SESSION['city'];
					echo "<table><tr><th>Name</th><th>Contact</th><th>Address</th></tr>"; // start a table tag in the HTML
					while($row = mysqli_fetch_array($query_run)){   //Creates a loop to loop through results
						echo "<tr><td>" . $row['pname'] . "</td><td>" . $row['phno'] . "</td><td>" .$row['address'] ."</td></tr>" ;  //$row['index'] the index here is a field name
					//echo "</table>";
				}
					echo "</table>";
			}

				else
					echo "the query was wrong ;)";





 ?>
 <br>
 <a href="approve.php"><input type="button" id="back-button" value="<<Go Back" /></a>
 <br>
 <a href="index.php"><input type="button" id="back-button" value="<<Go Back" /></a>

	</body>
</html>
