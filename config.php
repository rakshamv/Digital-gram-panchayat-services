<?php

	$host="localhost";
	$user="root";
	$password="";
	$dbname="epanchayath";
	$connection=mysqli_connect($host,$user,$password,$dbname);
	if(!$connection)
	{
		die(mysql_error($connection));
	}
	
?>
