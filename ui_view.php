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
			background-image:url('images/services.png');
			background-size: cover;
			background-repeat: no-repeat;
		}
		.a{
			
			background-color: lightgrey;
			text-align: center;
			height: 350px;
			margin-top: 50px;
			border-radius: 25px;
			opacity: 0.9;
			margin-right: 5px;
			
		}
		img{
		
			width:100%;
			height:200px;
			
			position: relative;
			z-index:-1;
		}
	
		.move2
		{
	margin-top:-20px;
					
			}		
			.move2 span 
			{
				background-color: orange;
				padding: 10px;

			}
	.abc{   
 			padding-left: 0px;
 			
 			margin-top: 10px;
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

									<li class="dropdown"><a href="#" data-toggle="dropdown">VIEW CERTIFICATE<span class="caret"></span></a>
						
										<ul class="dropdown-menu">
											<li ><a href="view_birth_certificate.php"> BIRTH CERTIFICATE</a></li>
											<li ><a href="view_death_application.php"> DEATH CERTIFICATE</a></li>
											<li><a href=" view_income_certificate.php"> INCOME CERTIFICATE</a></li>
											<li><a href="view_License_certificate.php">LICENCE CERTIFICATE</a></li>
											<li><a href="view_License_certificate(hotels).php">HOTEL,RESTURANT AND SHOP CERTIFICATE</a></li>
										
										</ul>
									</li>
									<li class="active"><a href="ui_view.php">VIEW SERVICE REQUEST</a></li> 
									<li ><a href="logout.php">LOGOUT</a></li>
								</ol>
							</div>
							
						</div>
					</nav>
				
				</div>
			</div>
		</div><br/><br/><br/><br/>
	<div class="container">
		<div class="row">

			 <?php
                 include 'config.php';
                 include 'session.php';

                 $a="select * from staff_reg where username='$username'";
                 $result1=mysqli_query($connection,$a);
                 while($b=mysqli_fetch_assoc($result1))
                 {
                 	$staff_id=$b['id'];
                 	$name=$b['name'];
                 	# code...
                 }

				$select="select * from  service_application_form where status='pending'";
                  $result=mysqli_query($connection,$select);
                    while($var=mysqli_fetch_assoc($result))
                         {
                                        
                          $application_id=$var['application_id'];
                          $applicant_name=$var['applicant_name'];
                          $mobile=$var['mobile'];
                          $village=$var['village'];
                          $aadhar=$var['aadhar'];
                          $ration=$var['ration'];
                          $total_income=$var['total_income'];             
                          $status=$var['status'];
						  $select1="select * from  services where service_id=' $application_id'";
                          $result1=mysqli_query($connection,$select1);
                          while($var1=mysqli_fetch_assoc($result1))
                             {
                              $id=$var1['service_id'];
                              $service_name=$var1['service_name'];
                                          
?>  

			
			<div class="a col-sm-3">	
				
				<div class="move2">
							<span style="font-size: 25px;"><strong><?php echo $service_name;?></strong>	</span>
				</div><br/><br/>
				<div class="col-sm-12">
							<p style="font-size: 15px;">Name :<strong><?php echo $applicant_name;?></strong></p>
				</div>
				
				<div class="col-sm-12" >
					<p style="font-size: 15px;">Contact:<strong><?php echo $mobile; ?></strong></p>
				</div>
				<div class="col-sm-12">
						<p style="font-size: 15px;">Grama: <strong><?php echo $village; ?></strong>	</p>
				</div>
				
				<div class="col-sm-12">
							<span style="font-size: 25px;">Income: <strong><?php echo $total_income;?></strong>	</span>
				</div>

				<div class="col-sm-12">
					<br/>
						<div class="col-sm-6">
								<a class=" btn btn-primary "  target="_blank" href="upload_proof/<?php echo "$aadhar";?>"/>View Aadhar</a>
						</div>
						
						<div class="col-sm-6">
							<a class=" btn btn-primary "  target="_blank" href="upload_proof/<?php echo "$ration" ?>"/>View Ration</a>
									
						</div>
			
				</div>

				
		
				

				<div class="abc col-sm-6">
					<br/>
					<form method="GET" action="accept.php">
						<input type="text" hidden name="id" value="<?php echo $id;?>"/>
						<input type="text" hidden name="staff_id" value="<?php echo $staff_id;?>"/>
						<input type="text" hidden name="application_id"   value="<?php echo "$application_id" ?>">
        			<input type="Submit" value="Accept" class="btn btn-block btn-success">
        			</form>
         		 </div>
         		 	
									<div class="abc col-sm-6">
										<br/>
													<button data-target="#reject" data-toggle="collapse" data-parent="#collapse"  class="btn btn-block btn-danger" >Reject</button></br></br>
											</div>
								
											<div class="collapse" id="reject">


				<form method="GET" action="reject.php">
					<input type="text" name="id" hidden  value="<?php echo "$id" ?>">
					<input type="text" hidden name="staff_id" value="<?php echo $staff_id;?>"/>
					<input type="text" hidden name="application_id"   value="<?php echo "$application_id" ?>">
					<input type="text" name="reason" placeholder="reason for rejecting" class="form-control"><br/>
					<input type="Submit" value="Reject" class="btn  btn-danger">
				</form>
											
											
			</div>
		       
	</div>
<?php }} ?>
	</div>
</div>
	</div>


	
	</body>
</html>