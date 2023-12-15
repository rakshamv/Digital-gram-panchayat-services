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
			height: 250px;
			border-radius: 15px;
			
		}
		
		.b{
		border: 1px solid gray;
		padding:8px;
		border-radius:10px;
		}
		body{
			background-image: url(birth.jpg);
			background-repeat: no-repeat;
			background-size: 100% 900px;
			
			
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
											<li class="active"><a href="view_birth_certificate.php"> BIRTH CERTIFICATE</a></li>
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
		</div><br/><br/><br/><br/>
	
	<div class="container">
		<div class="row" >
			
				<h1 align="center" style="font-size: 70px;"><strong>Birth Certificates</strong></h1>
				
							
								
									
									

								<?php
														
										include 'config.php';

																				/*update promo*/
																		$select="select * from  birth_certificate where  status='pending'";
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
																					
																					$father_name=$var['father_name'];
																					$mother_name=$var['mother_name'];
																					$hospital_name=$var['hospital_name'];
																					$dob=$var['dob'];
																					$time=$var['time'];
																					$certificate_issued_by_hospital=$var['certificate_issued_by_hospital'];
																					$status=$var['status'];
															?>																														


									<div class="col-sm-3">
								<div class="bag" align="center">
									<div class="col-sm-12">
										<h4>Hospital Name : <strong><?php echo "$hospital_name" ?></strong></h4>
									</div>
									<div class="col-sm-6">
										<h4>Father Name : <strong><?php echo "$father_name" ?></strong></h4>
									</div>
									<div class="col-sm-6">
										<h4>Mother Name : <strong><?php echo "$mother_name" ?></strong></h4>
									</div>
									
									<div class="col-sm-6">
										<h4>DOB : <strong><?php echo "$dob" ?></strong></h4>
									</div>
									<div class="col-sm-6">
										<h4>Time : <strong><?php echo "$time" ?></strong></h4>
									</div>
									<div class="col-sm-12"><br/>
									<div><a target="_blank" href="certificates/birth_certificate/<?php echo $certificate_issued_by_hospital;?>" class="b btn btn-primary">View certificate</a></div><br/>
									</div>

									<div class="col-sm-6">
										<a href="accept_birth.php?push=<?php echo "$applicant_id" ?>" class="btn btn-success btn-block" >Accept</a>
									</div>
									<div class="col-sm-6">
										<button data-target="#reject" data-toggle="collapse" data-parent="#collapse"  class="btn btn-danger btn-block" >Reject</button></br></br>
									</div>
								
											<div class="collapse" id="reject">


								

														<form method="GET" action="reject_birth.php">
																	<input type="text" name="id" hidden  value="<?php echo "$applicant_id" ?>">
																	<input type="text" name="reason" placeholder="reason for rejecting" class="form-control"><br/>
														 			<input type="Submit" value="Reject" class="btn btn-block btn-danger">
														 		</form>
											
											
												</div>
											</div>

									
								
							<?php }} ?>
						</div>
						
					</div>
			
</body>
</html>
	