<?php
/*
Connects the DB in the Back End/Server Side
*/
$serv="localhost";
$user="root";
$pass="ayush4190";
$db="tyc";
$con=mysqli_connect($serv,$user,$pass) or die("cant connect");
mysqli_select_db($con,$db);
?>
