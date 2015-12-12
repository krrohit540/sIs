<?php

	# Start the session:
	session_start();
	
	if(isset($_SESSION['username'])) {
		header('Location: student-login.php');	
	}

?>

<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
	
	<head>
		
		<title>Login | sIs</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php include ('config/css.php'); ?>
		<?php include ('config/js.php'); ?>
		
		<style>
			
			body { 
			  	background: url("../images/register.jpg") no-repeat center center fixed; 
			  	-webkit-background-size: cover;
			  	-moz-background-size: cover;
			  	-o-background-size: cover;
			  	background-size: cover;
			}
			
			.panel-success, .panel-danger {
				opacity: 0.65;
				margin-top:30px;
			}
			
		</style>
		
	</head>
	
	<body>
		
		<?php include ('template/nav.php'); ?> 		<!-- Navigation Bar -->
		
		<br><br>
		<div class="container">
			<div class="row">
				
				<div class="col-md-5">
					<div class="panel panel-success">
						
						<div class="panel-heading">
							<h3><strong>Student Login</strong> <i class="fa fa-check-square-o fa-2x"></i></h3>
						</div>
						
						<div class="panel-body">
							
							<form action="submission.php" method="post" role="form">
					  			<div class="form-group">
					    			<label for="email">Email <i class="fa fa-envelope-o fa-lg"></i></label>
					    			<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
					  			</div>
					  			
					  			<div class="form-group">
					    			<label for="password">Password <i class="fa fa-unlock fa-lg"></i></label>
					    			<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					  			</div>
					  			
					  			<br>
					  			<button type="submit" class="btn btn-success">Sign In <i class="fa fa-sign-in"></i></i></button>
					  			<input type="hidden" name="student-submit" value="1" >
					  			<button type="reset" class="btn btn-warning" value="Reset" style="float: right;">Reset <i class="fa fa-refresh fa-spin"></i></button>
							</form>
						</div>
					</div>	
				</div>
				
				<div class="col-md-5 col-md-offset-2">
					<div class="panel panel-danger">
						
						<div class="panel-heading">
							<h3><strong>Admin Login</strong> <i class="fa fa-check-square fa-2x"></i></h3>
						</div>						
						<div class="panel-body">
							
							<form action="submission.php" method="post" role="form">
					  			<div class="form-group">
					    			<label for="email">Email <i class="fa fa-envelope fa-lg"></i></label>
					    			<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
					  			</div>
					  			
					  			<div class="form-group">
					    			<label for="password">Password <i class="fa fa-unlock-alt fa-lg"></i></label>
					    			<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					  			</div>
					  			
					  			<br>
					  			<button type="submit" class="btn btn-danger">Sign In <i class="fa fa-sign-in"></i></button>
					  			<input type="hidden" name="admin-submit" value="2" >
					  			<button type="reset" class="btn btn-warning" value="Reset" style="float: right;">Reset <i class="fa fa-recycle fa-spin"></i></button>
							</form>
						</div>
					</div>		
				</div>
				
			</div>	
		</div>
		
		
		<?php include ('../template/footer.php'); ?>		<!-- Page Footer -->
		
	</body>

</html> 