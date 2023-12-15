<?php
	include "config.php";


	$applicant_id=$_POST["applicant_id"];
	$dod=$_POST["dod"];

	

	
	


$file='certificates/death_certificate/';
			$upload_aadhar=$_FILES["upload_aadhar"]["name"];
			$targetfile=$file.basename($_FILES["upload_aadhar"]["name"]);
			move_uploaded_file($_FILES["upload_aadhar"]["tmp_name"],$targetfile);


$file1='certificates/death_certificate/';
			$upload_certificate=$_FILES["upload_certificate"]["name"];
			$targetfile=$file.basename($_FILES["upload_certificate"]["name"]);
			move_uploaded_file($_FILES["upload_certificate"]["tmp_name"],$targetfile);

$file2='certificates/death_certificate/';
			$upload_doc_graveyard=$_FILES["upload_doc_graveyard"]["name"];
			$targetfile=$file.basename($_FILES["upload_doc_graveyard"]["name"]);
			move_uploaded_file($_FILES["upload_doc_graveyard"]["tmp_name"],$targetfile);




	$insert="insert into death_certificate(applicant_id,dod,upload_aadhar,upload_certificate,upload_doc_graveyard)
VALUES('".$applicant_id."',
'".$dod."',
'".$upload_aadhar."',
'".$upload_certificate."',
'".$upload_doc_graveyard."')";

		$result=mysqli_query($connection, $insert);



		
	
	if($result)
	{
		echo"<script>window.alert('Certificate  Application  Submitted..')
		 window.location='death_certificate.php'; 
			</script>";

	}
	else{
			die(mysqli_error($connection));
	}

	
	?>

	