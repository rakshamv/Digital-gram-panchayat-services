<?php
	include "config.php";

	$name=$_GET["name"];
	$email=$_GET["email"];
	$number=$_GET["number"];
	$address=$_GET["address"];
	$city=$_GET["city"];
	$state=$_GET["state"];
	$username=$_GET["username"];
	$password=$_GET["password"];
	$role='user';
	
	$string="insert into user_reg(name, email, number, address, city, state, username)VALUES('".$name."','".$email."','".$number."', '".$address."', '".$city."','".$state."','".$username."')";
	$string1="insert into login(username, password, role)VALUES('".$username."','".$password."', '".$role."')";

	$result=mysqli_query($connection, $string);
	$log1=mysqli_query($connection, $string1);
	
if(!$result)
	{
		die(mysqli_error($connection));
	}
	else{
		echo "<script>window.alert('Registerd successfully');window.location='index.php'</script>";
	}
	?>