<?php
	include "config.php";

	$service_name=$_POST["service_name"];
	$description=$_POST["description"];
	$total_application	=$_POST["total_application"];
	


$file='upload_services/';
			$image=$_FILES["image"]["name"];
			$targetfile=$file.basename($_FILES["image"]["name"]);
			move_uploaded_file($_FILES["image"]["tmp_name"],$targetfile);



$file='upload_services/';
			$image1=$_FILES["image1"]["name"];
			$targetfile=$file.basename($_FILES["image1"]["name"]);
			move_uploaded_file($_FILES["image1"]["tmp_name"],$targetfile);



	
	$insert="insert into services(service_name,image, description, image1, total_application)VALUES('".$service_name."','".$image."','".$description."','".$image1."', '".$total_application."')";

		$result=mysqli_query($connection, $insert);



		
	
	if($result)
	{
		echo"<script>window.alert('Service Added Successfully..')
		 window.location='service_form_admin.php'; 
			</script>";

	}
	else{
			die(mysqli_error($connection));
	}

	
	?>

	