<?php
	include "config.php";

	
	
	$year=$_POST["year"];
	$scheme=$_POST["scheme"];
	$imp_ag_name=$_POST["imp_ag_name"];
	$proposed_amt=$_POST["proposed_amt"];
	$approved_cost=$_POST["approved_cost"];

	$file='expence/';
			$image=$_FILES["image"]["name"];
			$targetfile=$file.basename($_FILES["image"]["name"]);
			move_uploaded_file($_FILES["image"]["tmp_name"],$targetfile);
	
	
	
	$string="insert into budget_expense(year,scheme,imp_ag_name,proposed_amt,approved_cost,image)VALUES('".$year."','".$scheme."','".$imp_ag_name."','".$proposed_amt."','".$approved_cost."','".$image."')";

	$result=mysqli_query($connection,$string);
	
	if($result)
	
		{
			echo"<script>window.alert('Budget Expense Uploaded successfully.. ');window.location='budget.php';</script>";
		}

	
	?>