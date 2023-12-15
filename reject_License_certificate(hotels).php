<?php
	include 'config.php';

	$id=$_GET['id'];
	$reason = $_GET['reason'];
	$delete="update  license_for_hotels_shops_restaurant set status='Rejected',reason='$reason' where applicant_id='$id'";
	$result=mysqli_query($connection,$delete);
	if(!$result)
	{
		die(mysqli_error($connection));	
	}
else
{
echo  " <script>
                            window.alert('Data Accepted');
                            window.location ='view_License_certificate(hotels).php';
          </script>";
}

?> 
