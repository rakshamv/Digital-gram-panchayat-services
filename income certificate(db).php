<?php
	include "config.php";


	$applicant_id=$_POST["applicant_id"];
	$select_ration_card=$_POST["select_ration_card"];
	$enter_ration_card=$_POST["enter_ration_card"];

	

	
	


$file='certificates/income certificate/';
			$upload_affidavit=$_FILES["upload_affidavit"]["name"];
			$targetfile=$file.basename($_FILES["upload_affidavit"]["name"]);
			move_uploaded_file($_FILES["upload_affidavit"]["tmp_name"],$targetfile);


$file1='certificates/income certificate/';
			$upload_aadhar_card=$_FILES["upload_aadhar_card"]["name"];
			$targetfile=$file.basename($_FILES["upload_aadhar_card"]["name"]);
			move_uploaded_file($_FILES["upload_aadhar_card"]["tmp_name"],$targetfile);

$file2='certificates/income certificate/';
			$upload_6Months_bank_statement=$_FILES["upload_6Months_bank_statement"]["name"];
			$targetfile=$file.basename($_FILES["upload_6Months_bank_statement"]["name"]);
			move_uploaded_file($_FILES["upload_6Months_bank_statement"]["tmp_name"],$targetfile);




	
	$insert="insert into income_certificate(applicant_id,select_ration_card,enter_ration_card,upload_affidavit,upload_aadhar_card,upload_6Months_bank_statement)
VALUES('".$applicant_id."',
'".$select_ration_card."',
'".$enter_ration_card."',
'".$upload_affidavit."',
'".$upload_aadhar_card."',
'".$upload_6Months_bank_statement."')";

		$result=mysqli_query($connection, $insert);



		
	
	if($result)
	{
		echo"<script>window.alert('Certificate  Application  Submitted..')
		 window.location='income certificate.php'; 
			</script>";

	}
	else{
			die(mysqli_error($connection));
	}

	
	?>

	