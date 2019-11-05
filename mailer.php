<?php
session_start();
require 'dbconfig/config.php';
if(isset($_SESSION['eml']))
{
$to=$_SESSION['eml'];
$sub='Forgot Password Request';
$msg="Hi ".$_SESSION['unm'].", your password is ".$_SESSION['tp'].". Now you can go and login";
$hed='from: no-reply';
$sent=mail($to,$sub,$msg,$hed);
if($sent)


	{
			$query ="select * from userinfo where eml = '$to' ";
			$query_run=mysqli_query($con,$query);
			if($query_run)
			{
				$query2 = "update userinfo set password =123 where eml='$to' ";
				$query_run2 = mysqli_query($con,$query2);
				if($query_run2)
				{echo '<script type="text/javascript"> alert("'.$msg.'") </script>';
													$_SESSION = [];
													session_destroy();}
			}
			else {
				$query ="select * from empuserinfo where eml = '$to' ";
				$query_run=mysqli_query($con,$query);

				if($query_run)
				{
					$query2 = "update empuserinfo set password =123 where eml='$to'";
					$query_run2 = mysqli_query($con,$query2);
					if($query_run2)
					{echo '<script type="text/javascript"> alert("'.$msg.'") </script>';
														$_SESSION = [];
														session_destroy();}
				}

			}

}
else
{
	echo '<script type="text/javascript"> alert("Sorry, unable to Send") </script>';
											$_SESSION = [];
											session_destroy();
}
}
else
{
	echo"<script>window.location='contact.php'</script>";
	//header('location:contact.php');
}
 ?>
<a href="index.php">click to go back</a>
