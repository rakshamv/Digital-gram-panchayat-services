
	
	<?php



include "config.php";

	$username= $_POST["username"];
	
	$password=  $_POST["password"];
	$role= $_POST["role"];
	session_start();
	if($role=='admin')
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
	elseif($role=='staff')
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
		header('location:ui_view.php');

	}
	else{
		echo "<script>window.alert('Invalid username or password'); window.location='index.php'</script>";
	}

	}

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
		header('location:user.php');

	}
	else{
		echo "<script>window.alert('Invalid username or password'); window.location='index.php'</script>";
	}

	}


else{
		echo "<script>window.alert('Invalid username or password'); window.location='index.php'</script>";
	}

	?>

