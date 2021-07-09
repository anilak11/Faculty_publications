<?php
	$servername="localhost";
	$username="root";
	$password="";
	$databasename="facultypub";
	$conn=mysqli_connect($servername,$username,$password,$databasename);
	if(!$conn)
	echo "Connection not ok";
?>