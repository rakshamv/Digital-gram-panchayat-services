<!doctype html>
<html>
<head>
	<title>Gram Panchayath</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<style>
		.anch{
			margin: 0px;
		}
		body{
			background-image: url('service1.png');
			background-size: cover;
			background-repeat: no-repeat;
			opacity: 0.8;

			background-position: center;
			background-attachment:fixed;
			
		}
	.serv{
		background-color:black;
		color:white;
		border:1px solid white;
		padding:15px 10px;
		margin-bottom:10px;
	}
	.serv h2{
		margin:5px;
	}
	.serv h3{
		margin:5px;
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
									<li class="active"><a href="service_form_admin.php">ADD SERVICES</a></li>
									<li><a href="budget.php">UPLOAD BUDGET</a></li>

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
		<?php
			include 'config.php';
									include 'session.php';
		?>
		
			<div class="form col-sm-offset-1 col-sm-5">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h1 class="panel-title" align="center" ><span class="fa fa-user-o"></span> &nbsp; Services uploading Form</h1>
					</div>
					<div class="b2 panel-body">
						<form method="POST" action="service_form_admin(db).php" class="form-horizontal" enctype="multipart/form-data">
							
						<div class="form-group">	
							<div>
								<div class="col-sm-12">
								<label>Service Name</label>
								<input type="text" required name="service_name" class="form-control" />
								</div>
								
							</div>
						</div>
						<div class="form-group">
							<div>
								<div class="col-sm-12">
								<label>Service Logo</label>
								<input type="file" name="image"  class="form-control" required />
								</div>
								
							</div>
						</div>
					






						<div class="form-group">
							<div>
								<div class="col-sm-12">
								<label>Description</label>
								<textarea rows="5" name="description" cols="25" class="form-control" required ></textarea>
								</div>
							</div>
						</div>
						
				
						
						<div class="form-group">
							<div>
								<div class="col-sm-12">
								<label>Information</label>
								<input type="file" name="image1"  class="form-control" required />
								</div>
								
							</div>
						</div>
						
						
						<div class="form-group">
							<div>
								<div class="col-sm-12">
									<label>No of Application Permitted</label>
									<input type="text" name="total_application"  class="form-control" required />
								</div>
								
							</div>
						</div>
						<input type="submit" value="Upload" class="btn btn-block btn-success"/>
					</form>
					</div>
					
				</div>
			</div>
			<div class="col-sm-6">
			<?php
				$search_serv="select * from services";
					$result1=mysqli_query($connection,$search_serv);
					while ($bud=mysqli_fetch_assoc($result1)) {
						$service_name=$bud['service_name'];
						$image=$bud['image'];
						
						$description=$bud['description'];
						$reference_file=$bud['image1'];
						$total_application=$bud['total_application'];
						
			?>
			<div class="col-sm-6">
				<div class="serv" align="center">
					<img src="upload_services/<?php echo $image;?>" width="100%" height="150px;" alt="Gram Panhayath Services" />
					<h2><?php echo $service_name ?></h2>
					<h3>Description :<?php echo $description ?> </h3>
						<a target="_blank" href="upload_services/<?php echo $reference_file ?>" >View More</a><br/>
					<button class="btn btn-primary btn-block">No of Applications Allowed - <?php echo $total_application; ?> no's</button>
				</div>
			</div>
					<?php } ?>
		</div>
	</div>
</body>
</html>