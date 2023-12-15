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
			margin: 0px;
		}
		.h1{
			text-align: center;
			margin-top:50px;
			font-weight:800;
			font-size:62px;
			text-transform:capitalize;
			margin-bottom:150px;
		}
		body{
			background-image: url('bg.jpg');
			background-repeat: no-repeat;
			background-size: cover 500px;
			text-align: center;
			color: white;
			background-attachment:fixed;
		}
		
		
		 .bor{
		 	border:1px solid white;
		 	background-color: #296d2196;
		 	padding: 50px 25px;
		 	border-radius:10px;

		 }
		 .ico1 p{
		 	color: white;
		 	font-size: 20px;
		 }
		
.view{

	background-color: crimson;
		color: white;
	 text-align: center;
}

.view a{

	color: white;
}

 .ico1 i{
				font-size: 50px;
				color: white;
				
		}
		 i.i1{
				color: white;
			}
			 i.i2{
				color: white;
			}
			a.hovr{
				text-decoration: none;
				color: black;


			}
			.counter_text a{
				color:white;
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
									<li class="active"><a href="adminhome.php">HOME</a></li>
									<li><a href="staff_reg.php">ADD STAFF</a></li>
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
		<div class="container">
		<div class="row">
			<div class="col-sm-12 ">
				<?php
				include 'config.php';
				include 'session.php';
			
				?>
				<h1 class="h1">Welcome <?php  echo $username; ?></h1>
				
			</div>
			
			<div class="counter_section">
				<div class="row">
					<div class="col-lg-3 col-md-3">
					<div class="counter_block"><div class="counter_img"> <span class="red_bg"><img src="https://cdn.shortpixel.ai/client/q_lossy,ret_img/https://themes91.in/wp/cultivation/cultivation-home2/wp-content/uploads/sites/3/2019/07/customer-80x80.png" alt="image" class="img-fluid" /></span></div>
					<div class="counter_text"><a href="viewcomplaint.php"><h3>View Complaints</h3></a></div></div>
				</div>
				<div class="col-lg-3 col-md-3"><div class="counter_block">
					<div class="counter_img"> <span class="red_bg"><img src="https://cdn.shortpixel.ai/client/q_lossy,ret_img/https://themes91.in/wp/cultivation/cultivation-home2/wp-content/uploads/sites/3/2019/07/2-80x80.png" alt="image" class="img-fluid" /></span></div><div class="counter_text"><a href="service_form_admin.php"><h3>Post Schemes</h3></a></div></div>
				</div>
				<div class="col-lg-3 col-md-3">
					<div class="counter_block"><div class="counter_img"> <span class="red_bg"><img src="https://cdn.shortpixel.ai/client/q_lossy,ret_img/https://themes91.in/wp/cultivation/cultivation-home2/wp-content/uploads/sites/3/2019/07/branch-80x80.png" alt="image" class="img-fluid" /></span></div><div class="counter_text"><a href="viewsuggestion.php"><h3>View Suggestions</h3></a></div></div>
				</div>
				<div class="col-lg-3 col-md-3">
					<div class="counter_block"><div class="counter_img"> <span class="red_bg"><img src="https://cdn.shortpixel.ai/client/q_lossy,ret_img/https://themes91.in/wp/cultivation/cultivation-home2/wp-content/uploads/sites/3/2019/07/Award-80x80.png" alt="image" class="img-fluid" /></span></div><div class="counter_text"><a href="budget.php"><h3>Upload Budget</h3></a></div></div>
				</div>
			</div>
		</div>
		</div>
		
	</div>

	
</body>
</html>	