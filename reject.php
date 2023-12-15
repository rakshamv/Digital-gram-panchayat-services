<?php
  include 'config.php';
    $id=$_GET['id'];
    $reason=$_GET['reason'];
    $staff_id=$_GET['staff_id'];
    $application_id=$_GET['application_id'];
    $update="update service_application_form set status='rejected',reason='$reason',staff_id='$staff_id' where application_id='$application_id'";
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