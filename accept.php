<?php
  include 'config.php';


    $id=$_GET['id'];
    $application_id=$_GET['application_id'];
    $staff_id=$_GET['staff_id'];
   
    $update="update service_application_form set status='Accepted',staff_id='$staff_id' where application_id='$application_id'";
    $query = "UPDATE `services` SET `total_application`=(`total_application`-1)  where service_id = '$id'";
    $result1=mysqli_query($connection,$query);
     $result=mysqli_query($connection,$update);
   
    
                   
      
    if(!$result)
    {
      die(mysqli_error($connection));
    }
    else
    {
     echo  " <script>
                            window.alert('Data Accepted');
                            window.location ='ui_view.php';
          </script>";
    }
?>