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
			background:url('budget.jpeg') no-repeat;
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
									<li class="active"><a href="budget.php">UPLOAD BUDGET</a></li>

									<li ><a href="logout.php">LOGOUT</a></li>
								</ol>
							</div>
							
						</div>
					</nav>
				
				</div>
			</div>
		</div><br/><br/><br/><br/>
	
	<div class="a container-fluid">
		<div class="row">
						
			<div class="form col-sm-offset-1 col-sm-5">
				<div class="panel">
					<div class="panel-heading" >
						<h1 class="panel-title"><span class="fa fa-money"></span> &nbsp; BUDGET</h1>
					</div>
					<?php
						include 'config.php';
						 		include 'session.php';
						$a="select * from gram";
						 		$result=mysqli_query($connection,$a);
						 		while ($b=mysqli_fetch_assoc($result)) {
						 			$name=$b['gram_name'];
								}
					?>
					<div class="b panel-body">
						<form method="get" action="budget_db.php" class="form-horizontal">
							<div class="form-group">
							<div>
								<div class="col-sm-12">
								<label>Gram Panchayath Name</label>
								<input type="text" name="" value="<?php echo $name; ?>" style="text-transform:capitalize;"required class="form-control"  disabled/>
								</div>
								
							</div>
						</div>
						
						<div class="form-group">
							<div >
								<div class="col-sm-6">
								<label>Year</label>
							<!--	<input type="text" name="year" max="4" required class="form-control"/>-->
								<select name="year" required class="form-control">
									<option value="">-Select Year-</option>
									<option value="2018-19">2018-19</option>
									<option value="2019-20">2019-20</option>
									<option value="2020-21">2020-21</option>
								</select>
								</div>
								<div class="col-sm-6">
								<label>Budget Amount</label>
									<input type="text" name="budget_amt" required placeholder="Enter Amount in Numbers" class="form-control"/>
								</div>
							
								
							</div>
						</div>
						<div class="form-group">
							<div>
								<div class="col-sm-12">
									<label>Total Expenses</label>
									<input type="text" name="total_expense" placeholder="Enter Amount in Numbers"  required class="form-control"/>
								</div>
								
								
								
							</div>
						</div>
						<input type="submit" value="Upload" class="btn btn-block btn-primary"/>
					</form>
					</div>
					
					
				</div>
			</div>
			<div class="form col-sm-5">
				<div class="panel">
					<div class="panel-heading" >
						<h1 class="panel-title" ><span class="fa fa-money"></span> &nbsp; View BUDGET</h1>
					</div>
					<?php

						$a="select * from gram";
						 		$result=mysqli_query($connection,$a);
						 		while ($b=mysqli_fetch_assoc($result)) {
						 			$name=$b['gram_name'];
								}
					?>
					<div class="b panel-body">
						<table class="table table-striped table-hover">
							<thead>
								<tr class="bg-primary">
									<th>Year</th>
									<th>Budget Amount</th>
									<th>Total Expenses</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							<?php 
								$search_budget="select * from budget";
									$result1=mysqli_query($connection,$search_budget);
									while ($bud=mysqli_fetch_assoc($result1)) {
										$year=$bud['year'];
										$bud_id=$bud['id'];
										
										$budget_amt=$bud['budget_amt'];
										$total_expense=$bud['total_expense'];
										$updated_on=$bud['updated_on'];
										
							?>
								<tr>
									<td><?php echo $year; ?></td>
									<td><?php echo $budget_amt; ?></td>
									<td><?php echo $total_expense; ?></td>
									<td><a href="budget_expense.php?op=<?php echo $bud_id?>" class="btn btn-success btn-block"> Upload Budget Expenses</a></td>
								</tr>
									<?php } ?>
							</tbody>
						</table>
					</div>
					
					
				</div>
			</div>
			
		</div>
	</div>
</body>
</html>