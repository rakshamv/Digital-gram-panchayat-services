
	
	<?php
	/*
	include "config.php";

	$user= $_GET["fname"];
	
	$password=  $_GET["fpass"];
	$insert="insert into login(username,password) values('".$user."','".$password."')";
	$result=mysqli_query($connection,$insert);
	if(!$result)
	{
		die(mysqli_error($connection));
	}
	else{
		echo "<script>window.alert('Stored Sucessfully'); window.location='basicform.html'</script>";
	}
	*/



include "config.php";

	$username= $_POST["username"];
	
	$password=  $_POST["password"];
	$role= $_POST["role"];
	session_start();
	if($role=='admin')
	{

	$insert="select* from login where username='".$username."' and password='".$password."' and role='".$role."'";
	/*$insert="insert into login(username,password) values('".$user."','".$password."')";*/
	$result=mysqli_query($connection,$insert);
	if(!$result)
	{
		die(mysqli_error($connection));

	}
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$_SESSION['role']=$role	;
		header('location:adminhome.php');

	}
	else{
		echo "<script>window.alert('Invalid username or password'); window.location='index.php'</script>";
	}

	}
	elseif($role=='subadmin')
	{

	$insert="select* from login where username='".$username."' and password='".$password."' and role='".$role."'";
	/*$insert="insert into login(username,password) values('".$user."','".$password."')";*/
	$result=mysqli_query($connection,$insert);
	if(!$result)
	{
		die(mysqli_error($connection));

	}
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$_SESSION['role']=$role	;
		header('location:subadminhome.php');

	}
	else{
		echo "<script>window.alert('Invalid username or password'); window.location='index.php'</script>";
	}

	}
	elseif($role=='trainingcenter')
	{

	$insert="select * from login where username='".$username."' and password='".$password."' and role='".$role."'";
	/*$insert="insert into login(username,password) values('".$user."','".$password."')";*/
	$result=mysqli_query($connection,$insert);
	if(!$result)
	{
		die(mysqli_error($connection));

	}
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$_SESSION['role']=$role	;
		header('location:trainingcenterhome.php');

	}
	else{
		echo "<script>window.alert('Invalid username or password'); window.location='index.php'</script>";
	}

	}
/*elseif($role=='worDoor Step Tech')
	{

	$insert="select* from login where username='".$username."' and password='".$password."' and role='".$role."'";
	/*$insert="insert into login(username,password) values('".$user."','".$password."')";
	$result=mysqli_query($connection,$insert);
	if(!$result)
	{
		die(mysqli_error($connection));

	}
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		header('location:technicianafterlogin.php');

	}
	else{
		echo "<script>window.alert('Invalid username or password'); window.location='index.php'</script>";
	}

	}*/
	elseif($role=='user')
	{

	$insert="select* from login where username='".$username."' and password='".$password."' and role='".$role."'";
	/*$insert="insert into login(username,password) values('".$user."','".$password."')";*/
	$result=mysqli_query($connection,$insert);
	if(!$result)
	{
		die(mysqli_error($connection));

	}
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$_SESSION['role']=$role	;
		header('location:userhome.php');

	}
	else{
		echo "<script>window.alert('Invalid username or password'); window.location='index.php'</script>";
	}

	}
	/*
elseif($role=='ngo')
	{

	$insert="select* from login where username='".$username."' and password='".$password."' and role='".$role."'";
	/*$insert="insert into login(username,password) values('".$user."','".$password."')";
	$result=mysqli_query($connection,$insert);
	if(!$result)
	{
		die(mysqli_error($connection));

	}
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$_SESSION['role']=$role	;
		header('location:ngo_afterlogin.php');

	}
	else{
		echo "<script>window.alert('Invalid username or password'); window.location='index.php'</script>";
	}

	}*/

else{
		echo "<script>window.alert('Invalid username or password'); window.location='index.php'</script>";
	}

	?>

