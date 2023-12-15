<!doctype html>
<html>
<head>
	<title>services Application Form</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<style>
		body{
			background-image: url(india.jpg);
			background-size: cover;
			opacity: 0.8;
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
					<li class="dropdown"><a href="#" data-toggle="dropdown">Add Certificate<span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="birth_certificate.php">Birth Certficate</a></li>
						<li><a href="death_certificate.php">Death Certficate</a></li>				
						<li><a href="income certificate.php">Income Certficate</a></li>
						<li><a href="license.php">Licence</a></li>
						<li ><a href="License_for_Hotels,Shops,Restaurant.php">Licence For Hotel,Shops,Resturant</a></li>
						</ul>
					</li>
					<li class="active"><a  href="view_service.php">View Services</a></li>
					<li><a  href="logout.php">Logout</a></li>
				</ul>
			</div>
				</nav>
		</div>
</div>
</div>
</div>

<br/><br/><br/><br/>
	<div class="a container-fluid">
		<div class="row">
		
		

			
				<?php 
					include "config.php";
					include 'session.php';

					$sc=$_GET['push'];
				$x="select * from user_reg where username='$username'";
					$result2=mysqli_query($connection,$x);
					while($c=mysqli_fetch_assoc($result2))
						{
							$u_id=$c['id'];
							$name=$c['name'];
						}	
					$select="select * from services where service_id='$sc'";
					$result=mysqli_query($connection,$select);
						while($fetch=mysqli_fetch_assoc($result))
							{
								$service_id=$fetch['service_id'];
								$service_name=$fetch['service_name'];
							}	
							

						$a="select * from gram";
							$result1=mysqli_query($connection,$a);
								while($b=mysqli_fetch_assoc($result1))
									{
										$id=$b['id'];
										$gram_name=$b['gram_name'];
										$state=$b['state'];
										$number=$b['number'];
										$email=$b['email'];
									}	

										
	
					
			?>




			<div class="form col-sm-offset-3 col-sm-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
							
						<h1 class="panel-title" align="center"><span class="fa fa-user-o"></span> &nbsp; <?php echo $service_name; ?></h1>
					</div>

					<div class="b2 panel-body">
						<form method="POST" action="application_form(db).php" class="form-horizontal" enctype="multipart/form-data">
						<input type="text" required name="application_id" value="<?php echo $sc;?>" class="form-control hidden" />
						<input type="text"   name="user_id" value="<?php echo $u_id ;?>" class="form-control hidden " />
						<div class="form-group">	
							<div>
								<div class="col-sm-12">
								<label>Applicant Name</label>
								<input type="text" required name="applicant_name" class="form-control" />
								</div>
								
							</div>
						</div>
							<div class="form-group">	
							
								<div class="col-sm-6">
								<label>Age</label>
								<input type="text" required name="age"  min="2" max="2" class="form-control" />
								</div>
								
								<div class="col-sm-6">
								<label>Mobile</label>
								<input type="text" required name="mobile" min="10" max="12" class="form-control" />
								</div>
								
							</div>
							<div class="form-group">
							
								<div class="col-sm-12">
									<label>Father name</label>
									<input type="text" name="father_name"  class="form-control" required />
								</div>
								
						
							</div>



						<div class="form-group">
							<div class="col-sm-12">
								<label>Address</label>
								<textarea rows="5" name="address" cols="25" class="form-control" required ></textarea>
							</div>
						</div>
							<div class="form-group">	
							
								<div class="col-sm-6">
								<label>Village/Grama</label>
								<input type="text" name="gram_name" value="<?php echo $gram_name;?>" class="form-control"disabled />
								</div>

								<div class="col-sm-6">
								<label>state</label>
								<input type="text" name="state" value="<?php echo $state;?>"  class="form-control"disabled />
								</div>
								
								
							</div>
								
						<div class="form-group">
							<div>
								<div class="col-sm-12">
								<label>Aadhar-Card proof</label>
								<input type="file" name="aadhar"  class="form-control" required />
								</div>
								
							</div>
						</div>
					
						<div class="form-group">
							<div>
								<div class="col-sm-12">
								<label>Ration Card</label>
								<input type="file" name="ration"  class="form-control" required />
								</div>
								
							</div>
						</div>
						
						
						<div class="form-group">
							
								<div class="col-sm-12">
									<label>Average Income</label>
									<select  name="total_income"  class="form-control" required>   
											<option>s-e-l-e-c-t</option>
											<option value="less than 50k">less than 50,000</option>
											<option value="50k-1L">between 50 Thousand to  1 Lakh</option>
											<option value="1L-2L">between 1 Lakh to  2 Lakh</option>											
											<option value="2L-3L">between 2 Lakh to  3 Lakh</option>




									</select>
									
								</div>
								
						
						</div>
						<input type="submit" value="Apply Now" class="btn btn-block btn-success"/>
					</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>