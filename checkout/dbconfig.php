<?php
	$host="localhost";
	$user="root";
	$pass="";
	$conn=mysqli_connect($host,$user);
	mysqli_select_db($conn,"unseen");
	/*if($conn)
	{
	echo "connected";
	}
	else
	{
	echo "not connected";
	}*/
?>