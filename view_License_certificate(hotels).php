<!doctype html>
<html>
<head>
	<title>Gram Panchayath</title>
	<link rel="stylesheet"  href="css/bootstrap.min.css"/>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<style>
		.anch{
			margin: 0px;
		}
		.bag{
			
			
			background-color: rgba(150,255,200,0.5);
			width: 500px;
			height: 240px;
			border-radius: 15px;
			
		}
		
		.b{
		border: 1px solid gray;
		padding:8px;
		border-radius:10px;
		}
		body{
			background-color: grey;
			background-repeat: no-repeat;
			background-size: 100% ;
			
			
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
									
									<li class="dropdown"><a href="#" data-toggle="dropdown">VIEW CERTIFICATE<span class="caret"></span></a>
						
										<ul class="dropdown-menu">
											<li ><a href="view_birth_certificate.php"> BIRTH CERTIFICATE</a></li>
											<li><a href="view_death_application.php"> DEATH CERTIFICATE</a></li>
											<li ><a href="view_income_certificate.php"> INCOME CERTIFICATE</a></li>
											<li ><a href="view_License_certificate.php">LICENCE CERTIFICATE</a></li>
											<li class="active"><a href="view_License_certificate(hotels).php">HOTEL,RESTURANT AND SHOP CERTIFICATE</a></li>
										
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
		</div><br/><br/><br/><br/>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 align="center" style="font-size: 50px; color: white;"><strong>License Certificates of Hotel,Shops,Restaurant</strong></h1>
							<div class="table table-responsive">
								<table class="table table-condensed">
									
									<tbody>

														<?php
														
															include 'config.php';

																				/*update promo*/
																		$select="select * from license_for_hotels_shops_restaurant where  status='pending'";
																				$result=mysqli_query($connection,$select);
																				if(!$result)
																				{
																					die(mysqli_error($connection));
																				}
																				else
																				{
																					while($var=mysqli_fetch_assoc($result))
																				{
																
																					$applicant_id=$var['applicant_id'];
																	
																					$shop_name=$var['shop_name'];
																					$shop_address=$var['shop_address'];
																					$purpose_of_business=$var['purpose_of_business'];
																					$upload_building_tax=$var['upload_building_tax'];
																					$status=$var['status'];
																				
															
															?>																														


										
									</tbody>

								
						
					</table>

			</div>
		</div>
	</div>
</div>
<div class="container">
						<div class="row">
							<div class="col-sm-3">
								<div class="bag" align="center">
									<div class="col-sm-12">
										<h4>Shop Name : <strong><?php echo "$shop_name" ?></strong></h4>
									</div>
									<div class="col-sm-6">
										<h4>Shop Address : <strong><?php echo "$shop_address" ?></strong></h4>
									</div>
									<div class="col-sm-6">
										<h4>Business Purpose : <strong><?php echo "$purpose_of_business" ?></strong></h4>
									</div>
									
									
									<div class="col-sm-12"><br/>
									<div><a target="_blank" href="license/License_for_Hotels,Shops,Restaurant/<?php echo $upload_building_tax;?>" class="b btn btn-primary btn-block">View License <span class="d"><span></a></div><br/>
									</div>

									<div class="bb">
					<div class="col-sm-6">	<a href="accept_License_certificate(hotels).php?push=<?php echo "$applicant_id" ?>"><input type="submit" class="btn btn-success btn-block" value="Confirm Request" /></a></div>
					
					<div class="col-sm-6">
						<button class="btn btn-success btn-block" data-toggle="collapse" data-target="#fu" data-parent="#collap" >Reject Request</button><br/>
					</div>
					
					<div class="collapse" id="fu">

						<form  method="GET" action="reject_License_certificate(hotels).php">

								<input type="text" name="id" hidden value="<?php echo $applicant_id;?>" />	
								<input type="text" name="reason" placeholder="reason for rejecting" class="form-control"><br/>
								<input type="submit" class="btn btn-danger btn-block" value="Reject"/></a></div>
							</form>
						</div>

							
					
				</div>
				
		
	</div>
									
									
								</div>
								
							</div>
							<?php }} ?>
						</div>
						
					</div>
</body>
</html>
	