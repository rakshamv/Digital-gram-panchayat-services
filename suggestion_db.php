<?php
	include 'config.php';
	$name=$_GET['name'];
	$area_name=$_GET['area_name'];
	
	$request_for=$_GET['request_for'];
	$description=$_GET['description'];
	
		$insert="insert into sug_tbl(name,area_name,request_for,description)values('".$name."','".$area_name."','".$request_for."','".$description."')";
		$result=mysqli_query($connection,$insert);
	
	if($result)
	{
		echo"<script>window.alert('data has been inserted');window.location='suggestion.php';</script>" ;
		
	}
	else{
		die(mysqli_error($con));
	}
	
?>