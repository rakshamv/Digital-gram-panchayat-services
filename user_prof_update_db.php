<?php
		/*echo $_GET["fname"];
		echo "<br/>";
		echo $_GET["lname"];
		echo "<br/>";
		echo $_GET["Phone"];
		echo "<br/>";
		echo $_GET["email"];
		echo "<br/>";
		echo $_GET["address"];
		echo "<br/>";
		echo $_GET["city"];
		echo "<br/>";
		echo $_GET["state"];*/
		

		include "config.php";
		$id=$_GET["id"];
		$name=$_GET["name"];
		$email=$_GET["email"];
		$number=$_GET['number'];
		$address=$_GET["address"];
		$city=$_GET["city"];
		$state=$_GET["state"];
		/*$username=$_GET["username"];
		$password=$_GET["password"];*/
		$role="user";


		// UPDATE `problemdetails` SET `lastname`='rao' where id=7;
		
		$insert="update user_reg set name='".$name."',email='".$email."',number='".$number."',address='".$address."',city='".$city."',state='".$state."' where id='".$id."'";




		/*(FirstName,LastName,Phone,Email,Address,City,State,username,password) values('".$FirstName."','".$LastName."','".$Phone."','".$Email."','".$Address."','".$City."','".$State."','".$username."','".$password."')";*/
		$result=mysqli_query($connection,$insert);		
		
		if(!$result)
	{
		die(mysqli_error($connection));

	}
	else{
		echo "<script>window.alert('Update successfully');window.location='viewprofile.php';</script>";
	}

	?>
