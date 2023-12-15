<!DOCTYPE html>
<html>
<head>
	<title>Gram Panchayath</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"> </script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<style>
		.anch{
			margin-bottom: 0px;
		}
		.h1{
			text-align: center;
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
									<li class="active"><a href="staffhome.php">HOME</a></li>
									<li class="dropdown"><a href="#" data-toggle="dropdown">VIEW CERTIFICATE<span class="caret"></span></a>
						
										<ul class="dropdown-menu">
											<li><a href="view_birth_certificate.php"> BIRTH CERTIFICATE</a></li>
											<li><a href="view_death_application.php"> DEATH CERTIFICATE</a></li>
											<li><a href="view_income_certificate.php"> INCOME CERTIFICATE</a></li>
											<li><a href="view_License_certificate.php">LICENCE CERTIFICATE</a></li>
											<li><a href="view_License_certificate(hotels).php">HOTEL,RESTURANT AND SHOP CERTIFICATE</a></li>
										
										</ul>
									</li>
									<li ><a href="ui_view.php">VIEW SERVICE REQUEST</a></li>
									<li ><a href="logout.php">LOGOUT</a></li>
								</ol>
							</div>
							
						</div>
					</nav>
				
				</div>
			</div>
		</div><br/><br/>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 ">
				<?php
				include 'config.php';
				include 'session.php';
			
				?>
				<h1 class="h1">Welcome <?php  echo $username; ?></h1>
				
			</div>
			
		</div>
		
	</div>

</body>
</html>	