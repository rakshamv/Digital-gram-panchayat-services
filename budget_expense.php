<!doctype html>
<html>
<head>
	<title>Gram Panchayath</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"> </script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<style>
		
		
		.panel{
			background-color:black;
			height:50px;
			margin-top: 150px;
			
			
		}
		.panel-title{
			color:white;
			font-weight:bold;
			font-size:20px;
			height:30px;
			
		}
		.b{
			background-color:rgba(0,0,0,0.5);
		}
		.anch{
			margin: 0px;
		}
		body
		{
			background:url('expence.jpeg') no-repeat;
			background-size: cover;
			height: 756px;

		}
		label{
			color: white;
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
									<li><a href="adminhome.php">HOME</a></li>
									<li><a href="staff_reg.php">ADD STAFF</a></li>
									<li><a href="viewsuggestion.php">VIEW SUGGESTION</a></li>
									<li><a href="viewcomplaint.php">VIEW COMPLAINTS</a></li>
									<li ><a href="service_form_admin.php">ADD SERVICES</a></li>
									<li ><a href="budget.php">UPLOAD BUDGET</a></li>

									<li ><a href="logout.php">LOGOUT</a></li>
								</ol>
							</div>
							
						</div>
					</nav>
				
				</div>
			</div>
		</div><br/>
	<div class="a container-fluid">
		<div class="row">
						
			<div class="form col-sm-offset-3 col-sm-6">
				<div class="panel">
					<div class="panel-heading" >
						<h1 class="panel-title" align="center"><span class="fa fa-money"></span> &nbsp; BUDGET EXPENSE</h1>
					</div>
					
					<div class="b panel-body">
						<form method="POST" action="budget_ex_db.php" class="form-horizontal"  enctype="multipart/form-data">
							<div class="form-group">
							<div>
								<div class="col-sm-6">
								<label>Year</label>
								<?php 
									include 'config.php';
									include 'session.php';
									
									$bud_id=$_GET['op'];
								$search_budget="select * from budget where id='$bud_id'";
									$result1=mysqli_query($connection,$search_budget);
									while ($bud=mysqli_fetch_assoc($result1)) {
										$year=$bud['year'];
										$bud_id=$bud['id'];
										
										$budget_amt=$bud['budget_amt'];
										$total_expense=$bud['total_expense'];
										$updated_on=$bud['updated_on'];
									}		
							?>
								<input type="text" name="year" value="<?php echo $year; ?>"  required class="form-control"/>
								
								</div>
								<div class="col-sm-6">
								<label>Enter Scheme</label>
								<input type="text" name="scheme" required class="form-control"/>
								</div>
								
							</div>
						</div>
						
						<div class="form-group">
							<div >
								<div class="col-sm-6">
								<label>Implementation Agency Name</label>
								<input type="text" name="imp_ag_name" required class="form-control"/>
								</div>
								<div class="col-sm-6">
								<label>Proposed Amount</label>
								<input type="text" name="proposed_amt"  placeholder="Enter Amount" required class="form-control"/>
								</div>
							</div>
						</div>
						
						
						
						
						
						<div class="form-group">
							<div>
								<div class="col-sm-6">
								<label>Approved Cost</label>
								<input type="text" name="approved_cost" placeholder="Enter Amount"  required class="form-control"/>
								</div>
								<div class="col-sm-6">
								<label>Upload Pic</label>
								<input type="file" name="image" required class="form-control"/>
								</div>
								
							</div>
						</div>
						<input type="submit" value="Upload" class="btn btn-block btn-primary"/>
					</form>
					</div>
					
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>