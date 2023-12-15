<?php
	include "config.php";


	$applicant_id=$_POST["applicant_id"];
	$shop_name=$_POST["shop_name"];
	$shop_address=$_POST["shop_address"];
	$purpose_of_business=$_POST["purpose_of_business"];

	
	

	
	


$file='license/License_for_Hotels,Shops,Restaurant/';
			$upload_building_tax=$_FILES["upload_building_tax"]["name"];
			$targetfile=$file.basename($_FILES["upload_building_tax"]["name"]);
			move_uploaded_file($_FILES["upload_building_tax"]["tmp_name"],$targetfile);






	
	$insert="insert into license_for_hotels_shops_restaurant(applicant_id,shop_name,shop_address,purpose_of_business	,upload_building_tax)
VALUES('".$applicant_id."',
'".$shop_name."',
'".$shop_address."',
'".$purpose_of_business	."',
'".$upload_building_tax."')";

		$result=mysqli_query($connection, $insert);



		
	
	if($result)
	{
		echo"<script>window.alert('License Application  Registered..')
		 window.location='License_for_Hotels,Shops,Restaurant.php'; 
			</script>";

	}
	else{
			die(mysqli_error($connection));
	}

	
	?>

	