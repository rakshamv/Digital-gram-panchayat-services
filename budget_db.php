<?php
	include "config.php";

	
	$g_p_name=$_GET["g_p_name"];
	$year=$_GET["year"];
	$budget_amt=$_GET["budget_amt"];
	$total_expense=$_GET["total_expense"];
	
	
	
	$string="insert into budget(g_p_name,year,budget_amt,total_expense,updated_on)VALUES('".$g_p_name."','".$year."','".$budget_amt."','".$total_expense."',now())";

	$result=mysqli_query($connection, $string);
	
	if(!$result)
	{

		die(mysqli_error($con));
	}
	else
		{
			echo"<script>window.alert('Uploaded successfully.. ');window.location='budget.php';</script>";
		}

	
	?>