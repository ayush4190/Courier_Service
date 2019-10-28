<?php
session_start();

if(isset($_SESSION['admusername']))
		{
		#ok login
			}
	else
	{
		echo"<script>window.location='index.php'</script>";
	//	header('location:index.php');
	}
require '../dbconfig/config.php';
?>

<!DOCTYPE html>
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

<?php

			$query="SELECT * from empuserinfo ";
					$query_run=mysqli_query($con,$query);

					if($query_run)
					{

							echo "<table><tr><th>Name</th><th>Contact</th><th>Address</th><th>Approval Status</th></tr>"; // start a table tag in the HTML
					while($row = mysqli_fetch_array($query_run)){   //Creates a loop to loop through results
					{
						echo "<tr><td>" . $row['pname'] . "</td><td>" . $row['phno'] . "</td><td>" .$row['address'] ."</td><td>" .$row['vstatus'] ."</td></tr>" ;  //$row['index'] the index here is a field name
					//	echo "<tr><td>" . $row['pname'] . "</td><td>" . $row['phno'] . "</td><td>" .$row['address'] ."</td><td>" .$row['vstatus'] ."</td></tr>" ;  //$row['index'] the index here is a field name

					}
					//echo "</table>";
				}
			}
				else
					echo "the query was wrong ;)";
 ?>




</table>

</body>
</html>
