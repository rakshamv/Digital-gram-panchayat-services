<?php
	include "config.php";
	
	$name=$_POST["name"];
	$email=$_POST["email"];
	$contact=$_POST["contact"];
	$address=$_POST["address"];
	$city=$_POST["city"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$role='staff';

		$file='uplaod/';
			$image=$_FILES["image"]["name"];
			$targetfile=$file.basename($_FILES["image"]["name"]);
			move_uploaded_file($_FILES["image"]["tmp_name"],$targetfile);
	
	$string="insert into staff_reg(name,contact,email,address,city,image,username)VALUES('".$name."','".$contact."','".$email."', '".$address."', '".$city."','".$image."','".$username."')";
	$string1="insert into login(username, password, role)VALUES('".$username."','".$password."', '".$role."')";

	$result=mysqli_query($connection, $string);
	$log1=mysqli_query($connection, $string1);

	
	if($result)
	{
		echo"<script>window.alert('Registered successfully...');window.location='staff_reg.php';</script>";

	}
	
	
	?>