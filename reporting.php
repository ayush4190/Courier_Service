<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SidEx - Courier Management System</title>
</head>

<body>
<?php

			$con=mysqli_connect("localhost","root","ayush4190");
			if(!$con)
			{
			die('could not connect'.mysqli_error());
			}

			mysqli_select_db($con,"courier");


			$sql1="select * from courier_table where `status`='Loaded'";
			$sql2="select * from courier_table where `status`='In Transit'";
			$sql3="select * from courier_table where `status`='Delivered'";
			$sql4="select * from courier_table";


			$result1=mysqli_query($con,$sql1);
			$result2=mysqli_query($con,$sql2);
			$result3=mysqli_query($con,$sql3);
			$result4=mysqli_query($con,$sql4);
			include("report1.php");
			if(!$result1)
			{
			echo "Error!" . "</br>";
			include 'report.php';
			}
			else {
			echo "Couriers in 'Loaded' state-->>";echo "</br>";echo "</br>";
			echo "<table>";
			echo"cid &nbsp;&nbsp;&nbsp; orig &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; dest &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; sname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; rname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; radd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; rate &nbsp;&nbsp;&nbsp; mode &nbsp;&nbsp;&nbsp; status";
			while( $row=mysqli_fetch_row($result1))
			{

				echo "<tr><td>$row[0]</td><td>&nbsp;&nbsp;</td><td>$row[1]</td><td>&nbsp;&nbsp;</td><td>$row[2]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[3]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[4]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[5]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[6]</td><td>&nbsp;&nbsp;</td><td>$row[7]</td><td>&nbsp;&nbsp;</td><td>$row[8]</td><td>&nbsp;&nbsp;</td><td>$row[9]</td></tr>";


			}
			echo "</table>";echo "</br>";echo "</br>";}


	//////////////////////
			if(!$result2)
			{
			echo "Error!" . "</br>";
			include 'report.php';
			}
			else {
			echo "Couriers in 'In Transit' state-->>";echo "</br>";echo "</br>";
			echo "<table>";
			echo"cid &nbsp;&nbsp;&nbsp; orig &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; dest &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; sname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; rname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; radd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; rate &nbsp;&nbsp;&nbsp; mode &nbsp;&nbsp;&nbsp; status";
			while( $row=mysqli_fetch_row($result2))
			{

				echo "<tr><td>$row[0]</td><td>&nbsp;&nbsp;</td><td>$row[1]</td><td>&nbsp;&nbsp;</td><td>$row[2]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[3]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[4]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[5]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[6]</td><td>&nbsp;&nbsp;</td><td>$row[7]</td><td>&nbsp;&nbsp;</td><td>$row[8]</td><td>&nbsp;&nbsp;</td><td>$row[9]</td></tr>";


			}
			echo "</table>";echo "</br>";echo "</br>"; }
	//////////////////////////////

			if(!$result3)
			{
			echo "Error!" . "</br>";
			include 'report.php';
			}
			else {
			echo "Couriers in 'Delivered' state-->>";echo "</br>";echo "</br>";
			echo "<table>";
			echo"cid &nbsp;&nbsp;&nbsp; orig &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; dest &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; sname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; rname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; radd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; rate &nbsp;&nbsp;&nbsp; mode &nbsp;&nbsp;&nbsp; status";
			while( $row=mysqli_fetch_row($result3))
			{

				echo "<tr><td>$row[0]</td><td>&nbsp;&nbsp;</td><td>$row[1]</td><td>&nbsp;&nbsp;</td><td>$row[2]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[3]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[4]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[5]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[6]</td><td>&nbsp;&nbsp;</td><td>$row[7]</td><td>&nbsp;&nbsp;</td><td>$row[8]</td><td>&nbsp;&nbsp;</td><td>$row[9]</td></tr>";


			}
			echo "</table>";}
	/////////////////////


			if(!$result4)
			{
			echo "Error!" . "</br>";
			include 'report.php';
			}
			else {
			echo "</br>";echo "</br>";echo "Total Revenue-->> &#x20B9; ";
			$sum = 0;
			while ($row = mysqli_fetch_assoc($result4))
			{
    			$sum += $row['rate'];
			}

			echo $sum;

			echo "</br>";echo "</br>"; }



        ?>
</body>
</html>
