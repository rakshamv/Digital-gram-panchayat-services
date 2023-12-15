<!doctype html>
<html>
<head>
<title>Gram Panchayath</title>
<link rel="stylesheet"  href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"1>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
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
			border-radius:10px;

		 }
		 .ico1 h3{
		 	color:white;
				font-weight:400;
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
			.title{
				color:white;
				font-weight:400;
			}
			body{
				background-image: url('budget_exp.jpg');
				background-size: cover;
				background-repeat: no-repeat;
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
					<li><a  href="view_status.php">View Status</a></li>
					<li><a style="color:white" href="logout.php">Logout</a></li>
				</ul>
			</div>
				</nav>
		</div>
</div>
</div>
</div>

	<div class="container" style="margin-top:150px;">
		<div class="row">
			<?php
				
				include 'config.php';

				$a="select * from budget";
				$result=mysqli_query($connection,$a);
				while ($b=mysqli_fetch_assoc($result)) 
				{
					# code...
					$g_p_name=$b['g_p_name'];
					$year=$b['year'];
					$budget_amt=$b['budget_amt'];
					$total_expense=$b['total_expense'];
					$updated_on=$b['updated_on'];
				}

			?>
			<div class=" col-sm-4">
				<div class="bor">
					<div class="ico1" align="center">
					<a href="#" class="hovr">
						<h1 class="title">Budget Year : <strong><?php echo $year; ?></strong></h1>
						<h3>Budget Amount:&nbsp;&nbsp;<strong><?php echo $budget_amt;?></strong></h3>
						<h3>Total Expenses Year:&nbsp;&nbsp;<strong><?php echo $total_expense;?></strong></h3>
					</a>
					</div>
					<div class="view">
						<a href="budgetexpences.php?op=<?php echo $year;?>" class="btn btn-success">View More</a>
						
					</div>
				</div>	
				
			</div>
		</div>
		
	</div>

</body>
</html>