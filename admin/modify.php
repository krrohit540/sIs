<?php

	# Start the session:
	session_start();
	
	if(!isset($_SESSION['username'])) {
		header('Location: login.php');	
	}

?>

<?php include ('config/setup.php');	?>

<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
	
	<head>
		
		<title>Modify | sIs</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php include ('config/css.php'); ?>
		<?php include ('config/js.php'); ?>
		
		<style>
			
		</style>
		
	</head>
	
	<body>
		
		<div class="container">
			<div class="row">
				<h2 align="center"><strong><?php echo $user['name']; ?>'s</strong> Profile</h2>
				<div align="center"><span class="img-thumbnail"><img src="../upload/<?php if($user['photo'])
																							echo $user['photo']; 
																						  else
																						  	echo "placeholder.gif";
																					?>" alt="NO image selected" width="210" height="220" /></span></div>
			</div>
			
			<div class="panel-body">
				<form method="post" action="submission.php" class="form-horizontal">
	
					<legend>Account Details</legend>
					<div class="col-md-12">
						<label><strong>Email</strong></label>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-envelope fa-lg"></i></span>
							<input type="email" class="form-control" name="email" value="<?php echo $user['email']; ?>" readonly=1 />
							<span class="input-group-addon"><i class="fa fa-lock fa-lg"></i></span>
						</div>		
					</div>
					
					<legend><br>Personel Details</legend>
					<div class="col-md-5">
						<label><strong>Name</strong></label>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
							<input type="text" class="form-control" name="name" value="<?php echo $user['name']; ?>" />
							<span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
						</div>		
					</div>
					<div class="col-md-5 col-md-offset-2">
						<label><strong>Birthdate</strong></label>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-birthday-cake fa-lg"></i></span>
							<input type="date" class="form-control" name="bday" value="<?php echo $user['birthdate']; ?>" />
							<span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
						</div>		
					</div>
					<div class="col-md-5">
						<label><strong>Gender</strong></label>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-female fa-lg"></i> / <i class="fa fa-male fa-lg"></i></span>
							<input type="text" class="form-control" name="sex" value="<?php echo $user['gender']; ?>" />
							<span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
						</div>		
					</div>
					<div class="col-md-5 col-md-offset-2">
						<label><strong>Contact No.</strong></label>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-mobile fa-lg"></i></span>
							<input type="number" class="form-control" name="mobile" value="<?php echo $user['mobile']; ?>" />
							<span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
						</div>		
					</div>
					<div class="col-md-5">
						<label><strong>Street</strong></label>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-road fa-lg"></i></span>
							<input type="text" class="form-control" name="street" value="<?php echo $user['street']; ?>" />
							<span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
						</div>		
					</div>
					<div class="col-md-5 col-md-offset-2">
						<label><strong>City</strong></label>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-map-marker fa-lg"></i></span>
							<input type="text" class="form-control" name="city" value="<?php echo $user['city']; ?>" />
							<span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
						</div>		
					</div>
					<div class="col-md-5">
						<label><strong>State</strong></label>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-location-arrow fa-lg"></i></span>
							<input type="text" class="form-control" name="state" value="<?php echo $user['state']; ?>" />
							<span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
						</div>		
					</div>
					<div class="col-md-5 col-md-offset-2">
						<label><strong>Country</strong></label>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-globe fa-lg"></i></span>
							<input type="text" class="form-control" name="country" value="<?php echo $user['country']; ?>" />
							<span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
						</div>		
					</div>
					
					
					<legend><br>Education Details</legend>
					<div class="col-md-5">
						<label><strong>Institute</strong></label>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-university fa-lg"></i></span>
							<input type="text" class="form-control" name="institute" value="<?php echo $user['institute']; ?>" readonly=1/>
							<span class="input-group-addon"><i class="fa fa-lock fa-lg"></i></span>
						</div>		
					</div>
					<div class="col-md-5 col-md-offset-2">
						<label><strong>Registration No.</strong></label>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-info-circle fa-lg"></i></span>
							<input type="text" class="form-control" name="registration" value="<?php echo $user['registration']; ?>" readonly=1 />
							<span class="input-group-addon"><i class="fa fa-lock fa-lg"></i></span>
						</div>		
					</div>
					<div class="col-md-5">
						<label><strong>Course</strong></label>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-book fa-lg"></i></span>
							<input type="text" class="form-control" name="course" value="<?php echo $user['course']; ?>" readonly=1 />
							<span class="input-group-addon"><i class="fa fa-lock fa-lg"></i></span>
						</div>		
					</div>
					<div class="col-md-5 col-md-offset-2">
						<label><strong>Department</strong></label>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-graduation-cap fa-lg"></i></span>
							<input type="text" class="form-control" name="department" value="<?php echo $user['department']; ?>" />
							<span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
						</div>		
					</div>
					<div class="col-md-5">
						<label><strong>Roll No.</strong></label>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-key fa-lg"></i></span>
							<input type="text" class="form-control" name="roll" value="<?php echo $user['roll']; ?>" />
							<span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
						</div>		
					</div>
					<div class="col-md-5 col-md-offset-2">
						<label><strong>CGPA</strong></label>
						<div class="form-group input-group">
							<span class="input-group-addon"><i class="fa fa-sort-numeric-asc fa-lg"></i></span>
							<input type="text" class="form-control" name="cgpa" value="<?php echo $user['cgpa']; ?>" />
							<span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
						</div>		
					</div>
	

					<button type="submit" class="btn btn-success btn-lg">Update <i class="fa fa-wrench"></i></button>
					<input type="hidden" name="modified" value="1" >
					
										
				</form>
				
			</div>
		
		</div>
		
	</body>

</html>