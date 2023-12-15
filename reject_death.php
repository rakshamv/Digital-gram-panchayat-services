<?php
	include 'config.php';

	$id=$_GET['id'];
	$reason=$_GET['reason'];
	$update="update death_certificate set status='rejected', reason='$reason' where applicant_id='$id'";
	$result=mysqli_query($connection,$update);
	if(!$result)
	{
		die(mysqli_error($connection));	
	}
else
{
	echo "Data Rejected Succesfully ";
}

?> 