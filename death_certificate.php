<!doctype html>
<html>
<head>
	<title>Gram Panchayath</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<style>
		body{
			background-image: url(death.jpg);
			background-repeat: no-repeat;
			background-size: 100% 900px;
			opacity: 0.95;
			
			
		}
		.b2{
			background:rgba(225,225,225,0.75);
			
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
						<li class="active"><a href="death_certificate.php">Death Certficate</a></li>				
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

<br/><br/><br/><br/>
	<div class="a container-fluid">
		<div class="row">
					


			<div class="form  col-sm-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
							
						<h1 class="panel-title" align="center" ><span class="fa fa-user-o"></span> &nbsp;Add Death Certificate </h1>
					</div>

					<div class="b2 panel-body">
						<form method="POST" 	action="death_certificate(db).php" class="form-horizontal" enctype="multipart/form-data">
						<?php  
							include 'config.php';
							include 'session.php';

							$a="select * from user_reg where username='$username'";
							$result=mysqli_query($connection,$a);
							while ($b=mysqli_fetch_assoc($result)) {
								$id=$b['id'];
								$name=$b['name'];
							}
							
						?>
						<div class="form-group">	
							<div>
								<div class="col-sm-6">
								<input hidden type="text" value="<?php echo $id;?>" name="applicant_id"/>
								</div>
								
							</div>
						</div>
						<div class="form-group">
							
								<div class="col-sm-12">
									<label> Date of Death </label>
									<input type="date" id="dod" name="dod" class="form-control" required >
									
								</div>
								
						
							</div>
						


						<div class="form-group">
							<div>
								<div class="col-sm-12">
								<label>Upload Aadhar Card snap</label>
								<input type="file" name="upload_aadhar"  class="form-control" required />
								</div>
								
							</div>
						</div>



						<div class="form-group">
							<div>
								<div class="col-sm-12">
								<label>Upload Certificate</label>
								<input type="file" name="upload_certificate"  class="form-control" required />
								</div>
								
							</div>
						</div>
							


						<div class="form-group">
							<div>
								<div class="col-sm-12">
								<label>Upload Document issued by graveyard</label>
								<input type="file" name="upload_doc_graveyard"  class="form-control" required />
								</div>
								
							</div>
						</div>
							

							



				
						
					
					
						<input type="submit" value="submit" class="btn btn-block btn-success"/>
					</form>
					</div>
					
				</div>
			</div>
			<div class="col-sm-6">
				<div class="table">
					<table class="table table-responsive">
						<?php
							

							$b="select * from death_certificate where applicant_id=$id";
							$result1=mysqli_query($connection,$b);
							while ($z=mysqli_fetch_assoc($result1)) {
								$status=$z['status'];
							}
						?>
						<tr>
							<th>Applicant Name</th>
							<th>Status</th>
						</tr>
						<tr>
							<td><?php echo $name; ?></td>
							<td><button type="button" class="btn btn-primary"><?php echo $status; ?></button></td>
						</tr>
						
					</table>
					
				</div>
				
			</div>
		</div>
	</div>
</body>
</html>