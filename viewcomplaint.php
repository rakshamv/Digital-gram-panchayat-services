<!DOCTYPE html>
<html>
<head>
	<title>Gram Panchayath</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<style>
	img
		{
				border-radius:100%;
				
		}
.content{
	background-color:#ffffffa3; 	
	padding:10px 10px;
	border-radius:10px;
}
.anch{
	margin-bottom: 0px;
}
body{
background:#4E4A49 url('user_comp.jpg') no-repeat top left;
background-size:60%;
background-attachment:fixed;
}
.main .title{
	color:white;
	padding-bottom:50px;
}
.main h3{
margin:0px;
font-size:32px;
color:dodgerblue;
font-weight:700;

}
.content h5{
	font-size:16px;
	
}

	</style>
	<body>
			<div class="container-fluid">
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
									<li><a href="staff_reg.php">ADD STAFF</a></li>
									<li><a href="viewsuggestion.php">VIEW SUGGESTION</a></li>
									<li class="active"><a href="viewcomplaint.php">VIEW COMPLAINTS</a></li>
									<li><a href="service_form_admin.php">ADD SERVICES</a></li>
									<li><a href="budget.php">UPLOAD BUDGET</a></li>
									<li ><a href="logout.php">LOGOUT</a></li>
								</ol>
							</div>
							
						</div>
					</nav>
				
				</div>
			</div>
		</div><br/><br/><br/><br/>
	
		<div class="main container">
				<div class="row">
					<h4 class="title" align="center" style="font-size: 50px;"><strong>User Complaints about Staff</strong></h4>	

																<?php
																				
																include 'config.php';

																				/*update promo*/
																		$select="select * from complaint";
																				$result=mysqli_query($connection,$select);
																				
																					while($var=mysqli_fetch_assoc($result))
																				{
																
																					$Name=$var['Name'];
																					$service_request=$var['service_request'];
																					$Complaint=$var['Complaint'];
																					$Complaint_on_staff=$var['Complaint_on_staff'];
																					
																				
															
															?>	
					
				<div class="col-sm-offset-3 col-sm-4">
					<div class="content">
							<div>
								<h3 align="center" style="text-transform:capitalize;"><?php echo "$Name" ?></h3>
							</div>
							<h5>Service Requested : <span><strong><?php echo "$service_request" ?></strong></span></h5>
							<h4>Complaint on : <strong><?php echo "$Complaint_on_staff" ?></strong></h4>
							<h4 align="center"><strong style="text-transform:capitalize;"><?php echo "$Complaint" ?></h4>	
					</div>

				</div>	
				
				<?php } ?>
				</div>
			</div>
			</div>
</body>
</html>