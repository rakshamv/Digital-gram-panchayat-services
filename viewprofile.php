<!DOCTYPE html>
<html>
<head>
	<title>Gram Panchayath</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<style>
		.navbar-inverse .navbar-nav>li a.abc{
    color: #882D3C;
}
.nav{
	padding-right: 40px;
	
}
.navbar-inverse .navbar-nav>li>a{
	color: #E4E4E4;
}
.a{
	padding-right: 0px;
	padding-left: 0px;	
}
.b{
   padding-left: 30px;
  }
  .var{
		 	background-color: dodgerblue;
			background-position: center;
			padding: 150px 0px 150px;
			position: relative;
			
			color: white; 

		 }
		 .var .overlay{
		 	position: absolute;
		 	top: 0;
		 	left: 0;
		 	background:rgba(24,24,24,0.75);
		 	width: 100%;
		 	height: 100%;



		 }
		 .log{
  		padding:50px;
  		
	}	
	.abc{
		
		background-color:rgba(150,150,150,0.4); 
		
		width: 100%;
		
	}
	.h1{
		background-color: black;
	}
	.panel-primary>.panel-heading {
    background-color: #28292c;
    border-color: #28292c;
}
		 


		 
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 a">
				<?php
				include "config.php";
				include "session.php";
				?>
			</div>
			
		</div>
		
	</div>
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
					<li class="active"><a href="viewprofile.php">View Profile</a></li>
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
					<li><a  style="" href="logout.php">Logout</a></li>
				</ul>
			</div>
				</nav>
		</div>
				
				</div>
			</div>
		</div>
	<header class="var">
				<div class="overlay"></div>
				<div class="container">
					<div class="row justify-content-center">
			<div class="col-sm-12 ">
				<div class="">
					<!--<span class="you">techCentrix</span>!-->
				
				<div align="center" class="center">
				<h1 class="title">Edit/Update Your Profile,</h1><?php echo $username; ?></h1>
				<div class="row">
				
				<div class="mov"> 
				
				</div>
				</div>
				</div>
				</div>
			</div>
		</div>
	</header>
	
	<div class="abc">	
		<div class="container-fluid ">
		<div class="row">
			<div class="col-sm-12 a">
				
				
			</div>
			
		</div>
		
	</div>
	
	<div class="container ">
		<div class="row">
			<div class="col-sm-12 log">
				<div class="panel panel-primary">
				<div class="panel panel-heading ">
					<h1 class="panel-title ">Edit Details</h1>
				</div>
				<div class="panel panel-body">
					<?php
					$a="select * from user_reg  where username='$username'";
					$result=mysqli_query($connection,$a);
					while($b=mysqli_fetch_assoc($result))
					{
						/*
						$productid=$b['productid'];
						$name=$b['name'];*/
						$id=$b['id'];
						$name=$b['name'];
						$email=$b['email'];
						$number=$b['number'];
						$address=$b['address'];
						$city=$b['city'];
						$state=$b['state'];
						$username=$b['username'];
					}
					


						/*$typeofappliance=$b['typeofappliance'];
						$productname=$b['productname'];
						$image=$b['image'];
						$problemdescription=$b['problemdescription'];
						$date=$b['date'];
						$status=$b['status'];*/
					
					?>


				<form method="get" action="user_prof_update_db.php" class="form-horizontal">
					<div class="form-group">
						<div class="col-sm-6">
							<input type="text" name="id" value="<?php echo $id; ?>" hidden >
							<label>First Name</label>
							<input type="text" name="name" required value="<?php echo $name; ?>" class="form-control">
						</div>
						<div class="col-sm-6">
							<label>E-mail</label>
							<input type="text" name="email" required value="<?php echo $email ; ?>" class="form-control">
						</div>

						
						
						
					
					</div>
					<div class="form-group">
						
						<div class="col-sm-6">
							<label >Phone Number </label>
							<input type="text" name="number" required value="<?php echo $number ; ?>" class="form-control">
							
							
						</div>
						<div class="col-sm-6">
							<label>Address</label>
							<input type="text" name="address" required value="<?php echo $address ; ?>" class="form-control">	
						</div>

					</div>

					<div class="form-group">
						
						
						<div class="col-sm-6">
							<label>City</label>
							<input type="text" name="city" required value="<?php echo $city ; ?>" class="form-control">
						</div>
						<div class="col-sm-6">
							<label>State</label>
							<input type="text" name="state" required value="<?php echo $state ; ?>" class="form-control">
							
						</div>
						
					
					</div>

					<div class="form-group">
						<div class="col-sm-12">
						<input type="submit"  value="Update" name="sub"  class="btn btn-block btn-primary">
						</div>
					</div>
							
					</div>
					</div>

				</form>
				
			</div>
			
		</div>
		
	</div>
	</div>
	




</body>
</html>