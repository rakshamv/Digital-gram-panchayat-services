<?php
session_start();
if(session_destroy())
{
	
		echo "<script>window.alert('Logout Successfuly'); window.location='index.php'</script>";
	
}
?>