<!DOCTYPE html>
<html>
<head>
	<title>Gram Panchayath
</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<style>
		.anch{
			margin: 0px;
		}
		 .bor{
		 	border:1px solid #5B88CB;
		 	background-color: #5b88cbd1;
		 	padding: 50px;
		 	border-radius:10px;

		 }
		 .ico1 p{
		 	color: white;
		 	font-size: 20px;
		 }
		
.view{

	background-color: crimson;
		color: white;
	 text-align: center;
}

.view a{

	color: white;
}

 .ico1 i{
				font-size: 50px;
				color: white;
				
		}
		 i.i1{
				color: white;
			}
			 i.i2{
				color: white;
			}
			a.hovr{
				text-decoration: none;
				color: black;


			}
			body{
				background-image: url('sugg3.jpg');
				background-position:center ;
				background-size: cover;
				
				

			}
	</style>
</head>
<body>
	<div class="container">
			<div class="row">
				<div class="col-sm-offset-2 col-sm-8">
					<nav class="navbar navbar-inverse navbar-fixed-top">
						<div class="container-fluid">
							<div class="navbar-header">
								<a href="index.php" class="navbar navbar-brand anch" >Gram Panchayath</a>
								<button class="navbar-toggle" data-toggle="collapse" data-target="#cl1">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span></button>
							</div>
							<div class="collapse navbar-collapse" id="cl1">
								<ol class="nav navbar-nav navbar-right" >
									<li><a href="adminhome.php">HOME</a></li>
									<li><a href="staff_reg.php">ADD STAFF</a></li>
									<li class="active"><a href="viewsuggestion.php">VIEW SUGGESTION</a></li>
									<li><a href="viewcomplaint.php">VIEW COMPLAINTS</a></li>
									<li ><a href="service_form_admin.php">ADD SERVICES</a></li>
									<li><a href="budget.php">UPLOAD BUDGET</a></li>

									<li ><a href="logout.php">LOGOUT</a></li>
								</ol>
							</div>
							
						</div>
					</nav>
				
				</div>
			</div>
		</div><br/><br/><br/><br/>
		<div class="container" style="margin-top: 100px;">
			<div class="row">
				<div class="col-sm-12">
					
						 	
						 	<?php
						 		include 'config.php';
						 		include 'session.php';

						 		$a="select * from user_reg";
						 		$result=mysqli_query($connection,$a);
						 		while ($b=mysqli_fetch_assoc($result)) {
						 			$id=$b['id'];
						 			$name=$b['name'];
						 			$email=$b['email'];
						 			$number=$b['number'];
						 			$address=$b['address'];
						 			$city=$b['city'];
						 			$state=$b['state'];



						 		$c="select * from sug_tbl";
						 		$result1=mysqli_query($connection,$c);
						 		while ($b=mysqli_fetch_assoc($result1)) {
						 			$id=$b['id'];
						 			$name=$b['name'];
						 			$area_name=$b['area_name'];
						 			
						 			$request_for=$b['request_for'];
						 			$description=$b['description'];
						 			

						 		

						 	?>
						 	
						 	
						 <?php }} ?>
						 	
						
						
					
				
			</div>
			
		</div>
		<?php

$sql="select count(*) as total from sug_tbl where request_for='water'";
				$result=mysqli_query($connection,$sql);
				$data=mysqli_fetch_assoc($result);

				$sql1="select count(*) as total from sug_tbl where request_for='electric'";
				$result1=mysqli_query($connection,$sql1);
				$data1=mysqli_fetch_assoc($result1);

				$sql2="select count(*) as total from sug_tbl where request_for='street_light'";
				$result2=mysqli_query($connection,$sql2);
				$data2=mysqli_fetch_assoc($result2);

				$sql3="select count(*) as total from sug_tbl where request_for='road'";
				$result3=mysqli_query($connection,$sql3);
				$data3=mysqli_fetch_assoc($result3);

				$sql4="select count(*) as total from sug_tbl where request_for='drinage'";
				$result4=mysqli_query($connection,$sql4);
				$data4=mysqli_fetch_assoc($result4);
	?>

<div class="row">
		<div class="col-sm-3">
				<div class="bor">
					<div class="ico1" align="center">
					<a href="#" class="hovr">
						<i class="fa fa-bolt animated jackInTheBox"></i><br/><br/>
						<p><?php echo $data1['total'];?>&nbsp;&nbsp;<strong>Electric</strong></p>
					</a>
					</div>
				</div>	
				
			</div>
			

			<div class="col-sm-3">

				<div class="bor">
					<div class="ico1" align="center" >
					<a href="" class="hovr">
						<i class="fa fa-times-circle animated lightSpeedIn"></i><br/><br/>
						<p ><?php echo $data4['total'];?>&nbsp;&nbsp;<strong>Drinage</strong></p>
					</a>	
					</div>
				</div>	
				
			</div>
			<div class="col-sm-3">
				<div class="bor">
					<div class="ico1"align="center" >
						<a href="#" class="hovr">
						<i class="fa fa-road i2 animated fadeIn"></i><br/><br/>
						<p><?php echo $data3['total'];?>&nbsp;&nbsp;<strong>Road</strong></p>
						</a>
					</div>
				</div>	
				
			</div>
			<div class="col-sm-3">
				<div class="bor">
					<div class="ico1"align="center" >
					<a href="#" class="hovr">
						<i class="fa fa-lightbulb-o i1 animated rollIn"></i><br/><br/>
						<p><?php echo $data2['total'];?>&nbsp;&nbsp;<strong>Street Light</strong></p>
					</a>
					</div>	
				</div>	
				
			</div>
		</div><br/>
		<div class="row">
			
		
			<div class="col-sm-offset-4 col-sm-3">
				<div class="bor">
					<div class="ico1"align="center" >
					<a href="#" class="hovr">
						<i class="fa fa-tint i1 animated shake"></i><br/><br/>
						<p><?php echo $data['total'];?>&nbsp;&nbsp;<strong>Water</strong></p>
					</a>
					</div>	
				</div>	
				
			</div>
		</div>
	</div>
		

</body>
</html>