<?php
	include "config.php";


	$a="select * from gram";
							$result1=mysqli_query($connection,$a);
								while($b=mysqli_fetch_assoc($result1))
									{
										$id=$b['id'];
										$gram_name=$b['gram_name'];
										$state=$b['state'];
										$number=$b['number'];
										$email=$b['email'];
									}	


	$application_id=$_POST["application_id"];
	$applicant_name=$_POST["applicant_name"];
	$age=$_POST["age"];
	$mobile=$_POST["mobile"];
	$father_name=$_POST["father_name"];
	$address=$_POST["address"];
	$total_income=$_POST["total_income"];
	$user_id=$_POST["user_id"];	

	
	


$file='upload_proof/';
			$aadhar=$_FILES["aadhar"]["name"];
			$targetfile=$file.basename($_FILES["aadhar"]["name"]);
			move_uploaded_file($_FILES["aadhar"]["tmp_name"],$targetfile);



$file1='upload_proof/';
			$ration=$_FILES["ration"]["name"];
			$targetfile=$file1.basename($_FILES["ration"]["name"]);
			move_uploaded_file($_FILES["ration"]["tmp_name"],$targetfile);



	
	$insert="insert into service_application_form(user_id,application_id,applicant_name,age,mobile,father_name,address,village,state
,aadhar,ration,total_income)VALUES('".$user_id."','".$application_id."','".$applicant_name."','".$age."','".$mobile."','".$father_name."', '".$address."','".$gram_name."','".$state."','".$aadhar."', '".$ration."', '".$total_income."')";

		$result=mysqli_query($connection, $insert);



		
	
	if($result)
	{
		echo"<script>window.alert('Apllication  Registered..')
		 window.location='user.php'; 
			</script>";

	}
	else{
			die(mysqli_error($connection));
	}

	
	?>

	