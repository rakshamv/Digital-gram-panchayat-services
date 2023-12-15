<!doctype html>
<html>
<head>
	<title>Gram Panchayath</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"> </script>
	<style>
		body{
			background:url('complaint1.jpg') no-repeat;
			background-size: cover;
			opacity: 0.8;
			}
		.panel-body{
			background-color: black;
			

		}
		label{
			color: white;
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
					<li ><a href="suggestion.php">Give Suggestion</a></li>
					<li class="dropdown"><a href="#" data-toggle="dropdown">Add Certificate<span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="birth_certificate.php">Birth Certficate</a></li>
						<li><a href="death_certificate.php">Death Certficate</a></li>				
						<li><a href="income certificate.php">Income Certficate</a></li>
						<li><a href="license.php">Licence</a></li>
						<li class="active"><a href="License_for_Hotels,Shops,Restaurant.php">Licence For Hotel,Shops,Resturant</a></li>
						</ul>
					</li>
					<li ><a  href="view_service.php">View Budget</a></li>
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
	<div class="container">
		<div class="row">
			<?php
						include 'config.php';
						include 'session.php';

							$a="select * from user_reg where username='$username'";
							$result=mysqli_query($connection,$a);
							while($b=mysqli_fetch_assoc($result))
							{
								$id=$b['id'];
								$name=$b['name'];

							}
							$service_id=$_GET['service_id'];
							$service_name=$_GET['service_name'];
							$staff_id=$_GET['staff_id'];

							
						?>
			<div class="col-sm-offset-3 col-sm-6">
			<form method="POST" action="insert_db.php" class="form-vertical">
				
				<div class="panel panel-primary">
					<div class="panel-heading" >
						<h1  class="panel-title" >Complaint Details</h1>
					</div>
						
							<div class="panel-body" >
								<div class="form-group">
										
										<input  type="text" name="name"  value="<?php echo $name; ?>"  hidden/>
								</div>
								<div class="form-group">
										
										<input type="text" name="user_id"   value="<?php echo $id; ?>" hidden/>
								</div>
								<div class="form-group">
									
									
			<?php
				$e="select * from services where service_name='$service_name'";
					$result1=mysqli_query($connection,$e);
					while($f=mysqli_fetch_assoc($result1))
					{
							$service_id=$f['service_id'];
							$service_name=$f['service_name'];

											


					?>
					<input type="text"  name="service" class="form-control hidden" value="<?php echo $service_name;?>"/>

							<?php  } ?>
									</select>
								</div>
								<div class="form-group">
									<label>Complaint Description</label>
									<textarea  rows="5" cols="25" name="desc" class="form-control"> </textarea>
								</div>
								
								
								
									<?php
										$x="select * from staff_reg where id='$staff_id'";
											$result2=mysqli_query($connection,$x);
											while($y=mysqli_fetch_assoc($result2))
											{
												$id=$y['id'];
												$name=$y['name'];

											


										?>
										<input type="text" class="form-control hidden"  name="staff" value="<?php echo $name;?>"/>

									<?php  } ?>
								</select>
								
							
						
				
					<br/>
						<div class="submit" align="center">
							<input type="submit" value="Submit" class="btn btn-success"/><br/>
						</div>
						</div>	
				</form>
			</div>
		</div>
	</div>
	</div>
</body>
</html>