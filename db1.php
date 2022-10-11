<?php
$con=mysqli_connect("localhost","root","","usermanagement");
if(mysqli_connect_errno($con))
{
	echo "connection failed".mysqli_connect_error($con);
}
?>