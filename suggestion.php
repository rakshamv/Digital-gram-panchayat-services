<!doctype html>
<html>
<head>
	<title>Gram Panchayath</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"> </script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<style>
		body{
			background-image: url('sugg1.jpg');
			background-size: 100%;
			background-repeat: no-repeat;
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
					<li class="active"><a href="suggestion.php">Give Suggestion</a></li>
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
	<div class="a container-fluid">
		<div class="row">

						<?php
						include 'config.php';
						include 'session.php';

							$a="select * from user_reg where username='$username'";
							$result=mysqli_query($connection,$a);
							while($b=mysqli_fetch_assoc($result))
							{
								$id=$b['id'];
							}
						?>
			<div class="form col-sm-offset-3 col-sm-6">
				<div class="panel panel-primary">
					<div class="panel-heading" >
						<h1 class="panel-title" align="center"><span class="fa fa-edit"></span> &nbsp; SUGGESTION FORM</h1>
					</div>
					
					<div class="b panel-body">
						<form method="get" action="suggestion_db.php" class="form-horizontal">
							<div class="form-group">
							<div>
								<div class="col-sm-12">
								
								<input type="text" name="name"  value="<?php echo $username; ?> " hidden  />
								</div>
								
							</div>
						</div>
						<div class="form-group">
							<div>
								<div class="col-sm-12">
								<label>Area Name</label>
								<input type="text" name="area_name" required class="form-control"/>
								</div>
								
							</div>
						</div>
						<div class="form-group">
							
								<div class="col-sm-12">
								<label>Request For</label>
								<select id="request" name="request_for" required class="form-control">
									<option value="select">Select</option>
									<option value="water">Water</option>
									<option value="electric">Electric Supply</option>
									<option value="street_light">Street Light</option>
									<option value="road">Road</option>
									<option value="drinage">Drinage</option>									
								</select>
								
								
								</div>
						
						</div>
						<div class="form-group">
							<div>
								<div class="col-sm-12">
								<label>Description</label>
								<textarea rows="5" name="description" cols="25" required class="form-control "></textarea>
								</div>
							</div>
						</div>
						
						
						<br/>
						
						
						
						
						
						
						
						<input type="submit" value="Submit Suggestion" class="btn btn-block btn-primary"/>
					</form>
					</div>
					
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>