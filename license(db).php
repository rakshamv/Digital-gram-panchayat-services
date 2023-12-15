<?php
	include "config.php";


	$applicant_id=$_POST["applicant_id"];
	$site_address=$_POST["site_address"];
	$area_of_plot=$_POST["area_of_plot"];
	$no_of_floors=$_POST["no_of_floors"];
	$total_built_up_area=$_POST["total_built_up_area"];
	$sellar=$_POST["sellar"];
	$area_of_the_existing_structure_for_reconstruction=$_POST["area_of_the_existing_structure_for_reconstruction"];
	

	
	


$file='license/';
			$building_current_plan=$_FILES["building_current_plan"]["name"];
			$targetfile=$file.basename($_FILES["building_current_plan"]["name"]);
			move_uploaded_file($_FILES["building_current_plan"]["tmp_name"],$targetfile);



$file1='license/';
			$upload_existing_plan=$_FILES["upload_existing_plan"]["name"];
			$targetfile=$file1.basename($_FILES["upload_existing_plan"]["name"]);
			move_uploaded_file($_FILES["upload_existing_plan"]["tmp_name"],$targetfile);



	
	$insert="insert into license(applicant_id,site_address,building_current_plan,area_of_plot,no_of_floors,total_built_up_area,sellar,area_of_the_existing_structure_for_reconstruction,upload_existing_plan)
VALUES('".$applicant_id."',
'".$site_address."',
'".$building_current_plan."',
'".$area_of_plot."',
'".$no_of_floors."',
'".$total_built_up_area."',
'".$sellar."',
'".$area_of_the_existing_structure_for_reconstruction."',
'".$upload_existing_plan."')";

		$result=mysqli_query($connection, $insert);



		
	
	if($result)
	{
		echo"<script>window.alert('License Application  Registered..')
		 window.location='license.php'; 
			</script>";

	}
	else{
			die(mysqli_error($connection));
	}

	
	?>

	