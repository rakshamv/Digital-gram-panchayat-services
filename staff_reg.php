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
			background-image:url("staff1.jpeg");
			height:716px;
			background-size:cover;
			color:white;
			
		}
		.navbar-inverse{
			background-color:SEA;	
		}
		.b2{
			background-color:rgba(0,0,0,0.3);
		}
		.form{
			height:600px;
			padding-top:60px;
		}
		
		.d{
			color:black;
			padding-top:20px;
		}
		#city{
			padding:5px;
		}

		.panel{
			background-color:#1F4C16;
			height:50px;
			
		}
		.panel-title{
			color:white;
			font-weight:bold;
			font-size:20px;
			height:30px;	
		}
		.anch{
			margin: 0px;
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
									<li ><a href="adminhome.php">HOME</a></li>
									<li class="active"><a href="staff_reg.php">ADD STAFF</a></li>
									<li><a href="viewsuggestion.php">VIEW SUGGESTION</a></li>
									<li><a href="viewcomplaint.php">VIEW COMPLAINTS</a></li>
									<li><a href="service_form_admin.php">ADD SERVICES</a></li>
									<li><a href="budget.php">UPLOAD BUDGET</a></li>

									<li ><a href="logout.php">LOGOUT</a></li>
								</ol>
							</div>
							
						</div>
					</nav>
				
				</div>
			</div>
		</div><br/><br/>

	<div class="a container-fluid">
		<div class="row">
		

			<div class="col-sm-6"><br/>
				<h2 align="center"><strong>Our Staffs</strong></h2>
				<div class="table" style="margin-top:15px; ">
					
						
						<?php
							include 'config.php';
							include 'session.php';

							$a="select * from staff_reg";
							$result=mysqli_query($connection,$a);
							while($b=mysqli_fetch_assoc($result))
							{
								$id=$b['id'];
								$name=$b['name'];
								$contact=$b['contact'];
								$email=$b['email'];
								$address=$b['address'];
								$city=$b['city'];
								$image=$b['image'];
								

							

						?>
						

						

								<div class="col-sm-6">
									<div style="border-radius:25px;padding:5px 5px;margin-bottom:5px; background-color: lightgrey;opacity: 0.6;" align="center">
									<div>
										<img width="100px" height="100px" style="border-radius: 100%; margin-top: 25px;" src="uplaod/<?php echo $image;?>" />
									</div>
									<div style="color: black">
										<h4><strong style="text-transform:capitalize
										;"><?php echo $name; ?></strong></h4>
										<h4>Contact : <strong><?php echo $contact; ?></strong></h4>
										<h4>Email : <strong><?php echo $email; ?></strong></h4>
										<h4>Address : <strong><?php echo $address; ?></strong></h4>
										<h4>City : <strong><?php echo $city; ?></strong></h4>
									</div>
									</div>
								</div>
						<?php } ?>
						


						
					
					
				</div>
				
			</div>
			
		
			<div class=" form col-sm-6">
				<div class="panel">
					<div class="panel-heading">
						<h1 class="panel-title" align="center"><span class="fa fa-user-o"></span> &nbsp Staff Registration</h1>
					</div>
					<div class="b2 panel-body">
						<form method="POST" action="staff_regdb.php" class="form-horizontal" enctype="multipart/form-data">
							<div class="form-group">
							<div>
								<div class="col-sm-12">
								<label>Name</label>
								<input type="text" required name="name" class="form-control"/>
								</div>
								
							</div>
						</div>
						
						<div class="form-group">
							<div >
								
								<div class="col-sm-6">
								<label>Phone-number</label>
								<input type="text" name="contact" required  class="form-control"/>
								</div>
								<div class="col-sm-6">
								<label>E-mail</label>
								<input type="email" name="email" required  class="form-control"/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div>
								<div class="col-sm-12">
								<label>Address</label>
								<textarea rows="5" name="address" cols="25" class="form-control" required ></textarea>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div>
								<div class="d col-sm-6">
								<label style="color:white">City</label>
								
								<select id="city" name="city" class="form-control" required >
									<option value="select">SELECT</option>
									<option value="mysore">MYSORE</option>
									<option value="banglore">BANGLORE</option>
									<option value="mandya">MANDYA</option>
									<option value="manglore">MANGLORE</option>
								</select>
								</div>
								
								<div class="d col-sm-6">
								<label style="color:white">Profile</label>
								<input type="file" name="image"  class="form-control" required />
								</div>
								
								
							</div>
						</div>
						
						<div class="form-group">
							<div>
								<div class="col-sm-6">
								<label>UserName</label>
								<input type="text" name="username"  class="form-control" required />
								</div>
								<div class="col-sm-6">
								<label>Password</label>
								<input type="password" name="password"  class="form-control" required />
								</div>
							</div>
						</div>
						<input type="submit" value="REGISTER" class="btn btn-block btn-primary"/>
					</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
</html>