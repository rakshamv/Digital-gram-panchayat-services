<!DOCTYPE html>
<html>
<head>
	<title>Gram Panchayath</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"> </script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<style>
		.main{

background-color: #D3D3D3;
margin-top: 0px;

}
.title{
	font-weight:800;
	text-transform: capitalize;
	padding:30px;
}

.sub{
			margin-top: 15px;
		}
		
		.first h3{
			font-size: 22px;
			color: black;
			text-decoration: none;
		}
		.first span{
			color: black;
		}
		
		.first{
			margin-bottom:10px;


		}
.services{
	background-color: white;
	border:2px solid;
	padding:10px 5px;
}
body{
	background-image: url(status.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
}


	</style>
</head>
<body>
	<div class="main">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
			<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
			<div class="navbar-header">
			<button type="button" data-target="#ab" data-toggle="collapse" class="navbar-toggle btn btn-info">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
				<a href="#" class="navbar-brand">Gram Panchayath</a>
			</div>
			<div class="collapse navbar-collapse" id="ab">
				<ul class="nav navbar-nav navbar-right">
					<li class="a" style="color:limegreen"><a href="user.php">Home</a></li>
					<li><a href="viewprofile.php">View Profile</a></li>
					<li><a href="suggestion.php">Give Suggestion</a></li>
					<li class="dropdown"><a href="#" data-toggle="dropdown">Add Certificate<span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="birth_certificate.php">Birth Certficate</a></li>
						<li><a href="death_certificate.php">Death Certficate</a></li>				
						<li><a href="income certificate.php">Income Certficate</a></li>
						<li><a href="license.php">Licence</a></li>
						<li><a href="License_for_Hotels,Shops,Restaurant.php">Licence For Hotel,Shops,Resturant</a></li>
						</ul>
					</li>
					<li><a  href="view_service.php">View Budget</a></li>
					<li class="active"><a  href="view_status.php">View Status</a></li>
					<li><a  href="logout.php">Logout</a></li>
				</ul>
			</div>
				</nav>
		</div>
</div>
</div>
</div>

<br/><br/>
				
				

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php
				include 'config.php';
				include 'session.php';
			
				?>
				
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="title" align="center" style="color: white;">Status</h1>
			</div>

				<?php 

				$a="select * from user_reg where username='$username'";
				$result1=mysqli_query($connection,$a);
					while ($b=mysqli_fetch_assoc($result1)) {
						$id=$b['id'];
					}
					

					$select="select * from  service_application_form where user_id='$id'";
					$result=mysqli_query($connection,$select);
					while($fetch=mysqli_fetch_assoc($result))
						{
							
							$user_id=$fetch['user_id'];
							$application_id=$fetch['application_id'];
							$applicant_name=$fetch['applicant_name'];
							$age=$fetch['age'];
							$status=$fetch['status'];
							$reason=$fetch['reason'];
							$staff_id=$fetch['staff_id'];
						}


		$selects="select * from services where service_id='$application_id'";
					$result3=mysqli_query($connection,$selects);
					while($x=mysqli_fetch_assoc($result3))
						{
							$service_id=$x['service_id'];
							$service_name=$x['service_name'];
							$description=$x['description'];
							$total_application=$x['total_application'];
							$image=$x['image'];
							$image1=$x['image1'];
						}
						?>
			
				<div class="first col-sm-4">
					<div class="services" align="center">

						<a href="upload_services/<?php echo $image;?>" target="_blank">
							<img src="upload_services/<?php echo $image;?>" width="250px" alt="just click me"/>
							<h3 style="text-align:center"><strong><?php echo $service_name ;?></strong></h3>
						</a><br/>
						<h4 align="center">Information:<strong><?php echo $description;?></strong></h4><br/>
						
						
						
								<div align="center">
									<button type="submit" class="btn btn-info"><span style="font-weight: bolder;">Status:<?php echo $status; ?></span>
									</button>
									<br/><br/>
									<button type="submit" class="btn btn-info"><span style="font-weight: bolder;">Reason:<?php echo $reason; ?></span>
									</button>
									
								</div>
									<br/>
								<form class="form-horizontal" method="GET" action="t3.php">
									<input type="text" hidden name="service_id"
									value="<?php echo $service_id;?>"/>
									<input type="text" hidden name="service_name"
									value="<?php echo $service_name;?>"/>
									<input type="text" hidden name="staff_id"
									value="<?php echo $staff_id;?>"/>
									<input type="submit" class="btn btn-primary form-control" value="Would You Like To Raise a Complaint?"/>
								</form>
						
					</div>
				</div>





			
		
		</div>
	</div>

	
</body>
</html>