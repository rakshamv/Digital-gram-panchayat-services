<?php
	include "config.php";


	$applicant_id=$_POST["applicant_id"];
	$father_name=$_POST["father_name"];
	$mother_name=$_POST["mother_name"];
	$hospital_name=$_POST["hospital_name"];
	$dob=$_POST["dob"];
	$time=$_POST["time"];
	

	
	


$file='certificates/birth_certificate/';
$certificate_issued_by_hospital=$_FILES["certificate_issued_by_hospital"]["name"];
			$targetfile=$file.basename($_FILES["certificate_issued_by_hospital"]["name"]);
			move_uploaded_file($_FILES["certificate_issued_by_hospital"]["tmp_name"],$targetfile);


	
	$insert="insert into birth_certificate(applicant_id,father_name,mother_name,hospital_name,dob,time,certificate_issued_by_hospital)
VALUES('".$applicant_id."',
'".$father_name."',
'".$mother_name."',
'".$hospital_name."',
'".$dob."',
'".$time."',
'".$certificate_issued_by_hospital."')";

		$result=mysqli_query($connection, $insert);



		
	
	if($result)
	{
		echo"<script>window.alert('Birth Certificate .')
		 window.location='birth_certificate.php'; 
			</script>";

	}
	else{
			die(mysqli_error($connection));
	}

	
	?>

	