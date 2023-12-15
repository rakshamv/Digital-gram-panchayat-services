<!DOCTYPE html>
<html>
<head>
	<title>Gram Panchayath</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"> </script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<style>
		.navbar-default .navbar-nav .a a{
			color:#fff;
		}
		.navbar-default{
			background-color:#183c18a8;
		}
		.navbar-default .navbar-brand {
    		color: #fff;
		}
		.navbar-default .navbar-nav>li>a {
    		color: #fff;
		}
		.navbar-default .navbar-nav>li>a:hover {
    		color: #fff;
		}
		.navbar-default .navbar-toggle {
		    color: #fff;
		}
		.main{
			background-image:url("images/home_screen.jpg");
			background-repeat:no-repeat;
			background-size:100% 450px;
		}
		.bgtext{
			text-align:center;
			color:white;
			padding:40px 0px;
		}
		
	
	.pic{
	border-radius:30px;
	}
	.text{
	color:white;
	background-color:grey;
	border-radius:30px;
	padding-bottom:20px;
	text-align: center;
	}
	.text h2{
	padding-top:20px;
	margin-top:0px;
	font-size:20px;
	}
	.text h1{
	font-size:20px;
	}
	.a{
	padding-left:15px;

	}

	.modal-body{
		background:url("images/lawn.png")
	}
	.bt{
		margin-left:0px;
	}
	.b{
			background-color:dimgray;
			width:100%;
			position:relative;
			bottom:50px;
			color:white;
			text-align:center;
			font-family:cursive;
		}
		
		.fa{
			width:100px;
			height:100px;
			border-radius:50%;
			font-size:35px;
			padding-top:30px;
			text-align:center;
		}
		.c{
			margin-left:20px;
			text-align:center;
			font-family:cursive;
		}
		 .bor{
		 	border:1px solid #5B88CB;
		 	background-color: #5B88CB;
		 	padding: 20px;

		 }
		 .ico1 p{
		 	color: white;
		 	font-size: 15px;
		 }
		
.view{

	
		color: white;
	 text-align: center;
}

.view a{

	color: white;
}

 .ico1 i{
				font-size: 20px;
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
					<li class="a " style="color:limegreen"><a href="user.php">Home</a></li>
					<li><a href="viewprofile.php">View Profile</a></li>
					<li><a href="suggestion.php">Give Suggestion</a></li>
					<li><a href="t3.php">Raise Complaint</a></li>
					<li class="dropdown"><a href="#" data-toggle="dropdown">Add Certificate<span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="birth_certificate.php">Birth Certficate</a></li>
						<li><a href="death_certificate.php">Death Certficate</a></li>				
						<li><a href="income certificate.php">Income Certficate</a></li>
						<li><a href="license.php">Licence</a></li>
						<li><a href="License_for_Hotels,Shops,Restaurant.php">Licence For Hotel,Shops,Resturant</a></li>
						</ul>
					</li>
					<li class="active"><a  href="view_service.php">View Budget</a></li>
					<li><a style="color:white" href="logout.php">Logout</a></li>
				</ul>
			</div>
				</nav>
		</div>
</div>
</div>
</div>

<br/><br/>
				
				

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php
				include 'config.php';
				include 'session.php';
			

			$budget_year=  $_GET["op"];
				?>
				
				
			</div>
			
		</div>
		<br/><br/><br/><br/>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-offset-1 col-sm-10">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h1 class="panel-title">Budget Expenses - Year</h1>
				</div>
			<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<th>Year</th>
						<th>Scheme</th>
						<th>Company Name</th>
						<th>Propsed Amount</th>
						<th>Approved Amount</th>
						<th>Image</th>
					</tr>
					<?php
					

				$a="select * from budget_expense where year='$budget_year'";
				$result=mysqli_query($connection,$a);
				while ($b=mysqli_fetch_assoc($result)) {
					# code...
					$scheme=$b['scheme'];
					$year=$b['year'];
					$imp_ag_name=$b['imp_ag_name'];
					$proposed_amt=$b['proposed_amt'];
					$approved_cost=$b['approved_cost'];
					$image=$b['image'];
				

			?>
			<tr>
				<td><?php echo $year; ?></td>
				<td><?php echo $scheme; ?></td>
				<td><?php echo $imp_ag_name; ?></td>
				<td><?php echo $proposed_amt; ?></td>
				<td><?php echo $approved_cost; ?></td>
				<td><img width="100px" height="100px" src="expence/<?php echo $image; ?>" /></td>
			</tr>
				<?php } ?>	
				</table>
				
			</div>
		</div>
		
	</div>

	
</body>
</html>