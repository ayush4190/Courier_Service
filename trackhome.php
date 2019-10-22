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


			$un=$_POST['username'];
			$cid=$_POST['cid'];

			$sql="select * from courier_table where sname='$un' and cid='$cid'";



			$result=mysqli_query($con,$sql);
			include("report3.php");
			if(!$result)
			{
			echo "Incorrect details !" . "</br>";
			include 'index.php';
			}
			else {

			echo "<table>";

			while( $row=mysqli_fetch_row($result))
			{

				echo "<tr><td>Courier ID= <p></p></td><td>$row[0]</td></tr><tr><td><p>Sender's Name=</p></td><td>$row[3]</td></tr><tr><td><p>Status=</p></td><td>$row[9]</td></tr>";




			}
			echo "</table>"; }
        ?>

</body>
</html>
