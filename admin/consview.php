<?php
session_start();
if(isset($_SESSION['admusername']))
			{

			}
else
	{
		echo"<script>window.location='index.php'</script>";
		//header('location:index.php');
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
<h2>Consignment List</h2>

<?php

			$query="SELECT * from consig where cc='".$_SESSION['city']."' ";
					$query_run=mysqli_query($con,$query);

					if($query_run)
					{
					echo "Consignment OF ". $_SESSION['city'];
							echo "<table>"; // start a table tag in the HTML
					while($row = mysqli_fetch_array($query_run)){   //Creates a loop to loop through results
					echo "<tr><td>" . $row['pname'] . "</td><td>" . $row['phno'] . "</td></tr>";  //$row['index'] the index here is a field name
				
				}}
				else
					echo "the query was wrong ;)";
 ?>

 <br>
 <a href="index.php"><input type="button" id="back-button" value="<<Go Back" /></a>
</table>
	</body>
</html>
