<?php
	include 'config.php';
	$name=$_POST['name'];
	$user_id=$_POST['user_id'];
	$s_request=$_POST['service'];
	$desc=$_POST['desc'];
	$staff=$_POST['staff'];
	
		$insert="INSERT INTO complaint(Name, User_id, service_request, Complaint, Complaint_on_staff) VALUES ('".$name."','".$user_id."','".$s_request."','".$desc."','".$staff."')";
		$result=mysqli_query($connection,$insert);
	
	if($result)
	{
		echo"<script>window.alert('Inserted');window.location='view_status.php';</script>" ;
		
	}
	else{
		die(mysqli_error($connection));
	}
	
?>