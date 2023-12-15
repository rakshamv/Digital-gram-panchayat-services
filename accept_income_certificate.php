<?php
  include 'config.php';
  	$pull=$_GET['push'];
  	$update="update income_certificate set status='Accepted' where applicant_id ='$pull'";
  	$result=mysqli_query($connection,$update);
  	if(!$result)
  	{
  		die(mysqli_error($connection));
  	}
  	else
  	{
  		echo  " <script>
                            window.alert('Data Accepted');
                            window.location ='view_income_certificate.php';
          </script>";	
        }
?>