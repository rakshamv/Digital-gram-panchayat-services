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
		body{
			background-color: lightgrey;

		}
		
.services{
	background-color: white;
	border:2px solid;
	padding:10px 5px;
}
.first{
	margin-bottom: 10px;
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
					<li class="a active" style="color:limegreen"><a href="user.php">Home</a></li>
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
					<li><a  href="view_status.php">View Status</a></li>
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
				<h1 class="title" align="center">Welcome <?php  echo $username; ?></h1>
				
				
			</div>
			
		</div>
		
	</div>
	
	
	<div class="main">
	<div class="container-fluid">
			<div class="row">
			
				<div class="col-sm-12" align="center">
						<div id="123" class="carousel slide" data-ride="carousel ">
									<ol class="carousel-indicators">
										<li data-target="#123" data-slide-to="0" class="active" >        	 </li>
										<li data-target="#123" data-slide-to="1">      				   		 </li>
										<li data-target="#123" data-slide-to="2">       					</li>
										<li data-target="#123" data-slide-to="3">       					</li>

									</ol>
									
									<div class="carousel-inner" role="listbox">
										<div class="item active "><img src="scheme1.png" alt="scheme"></div>
										<div class="item"><img src="scheme2.png"></div>
										<div class="item"><img src="scheme3.png"></div>
										<div class="item"><img src="scheme4.png"></div>

									</div>	
									<a href="#123" class="left carousel-control" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
									</a>
					
									<a href="#123" class="right carousel-control" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
									</a>
						</div>
				</div>
	
			</div>
	</div>
	</div>
	<br/>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="title" align="center">Our Services</h1>
			</div>

				<?php 

					include 'config.php';
					$select="select * from services";
					$result=mysqli_query($connection,$select);
					while($fetch=mysqli_fetch_assoc($result))
						{
							$service_id=$fetch['service_id'];
							$service_name=$fetch['service_name'];
							$description=$fetch['description'];
							$total_application=$fetch['total_application'];
							$image=$fetch['image'];
							$image1=$fetch['image1'];
						?>
			
				<div class="first col-sm-4">
					<div class="services" align="center">

						<a href="upload_services/<?php echo $image;?>" target="_blank">
							<img height="150px;" src="upload_services/<?php echo $image;?>"  width="100%"  alt="just click me"/>
							<h3 style="text-align:center"><strong><?php echo $service_name ;?></strong></h3>
						</a><br/>
						<h4 align="center">Information:<strong><?php echo $description;?></strong></h4><br/>
						<h4 align="center" style="color: black">Application left:<strong><?php echo $total_application;?></strong></h4><br/>
						<a  class="btn btn-primary" style=" border-radius: 20px; margin-bottom:10px" href="upload_services/<?php echo $image1;?>" target="_blank" >Download Details</a>
						
								<div align="center"><a href="application_form.php?push= <?php echo $service_id?>" class="btn btn-block btn-success">Apply Now</a></div>
						
					</div>
				</div>





			
		<?php } ?>
		</div>
	</div>

	
</body>
</html>