<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
	<head>
		
		<title>Registration | sIs</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php include ('config/css.php'); ?>
		<?php include ('config/js.php'); ?>
		
		<style>
			
			body { 
			  	background: url("images/register.jpg") no-repeat center center fixed; 
			  	-webkit-background-size: cover;
			  	-moz-background-size: cover;
			  	-o-background-size: cover;
			  	background-size: cover;
			}
			
			.panel-default {
				opacity: 0.85;
				margin-top:20px;
			}
			
		</style>
		
	</head>
	
	<body>
		
		<?php include ('template/navigation.php'); ?> 		<!-- Navigation Bar -->
	
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="panel panel-default">
						
						<div class="panel-heading">
							<img src="images/reg.png" class="img-responsive"/>
						</div>		<!-- END panel-heading -->
						
						<div class="panel-body">
							
							<form  name="form" action="submission.php" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-5">
										<h3><strong>Personel Details</strong></h3><hr>
							  			<div class="form-group">
							    			<label for="name">Name <i class="fa fa-child fa-lg"></i></label>
							    			<input type="text" class="form-control" id="name" onkeyup="validateName()" name="name" placeholder="Enter your Full name">
							    			<label id="namePrompt"></label>
							  			</div>
							  			
							  			<div class="form-group">
							    			<label for="bday">Birthdate <i class="fa fa-birthday-cake fa-lg"></i></label>
							    			<input type="date" class="form-control" id="bday" onkeyup="validateBirthdate()" name="bday">
							    			<label id="bdayPrompt"></label>
							  			</div>
										
										<div class="form-group">
							    			<label for="sex">Gender <i class="fa fa-female fa-lg">/</i><i class="fa fa-male fa-lg"></i></label>
							    			<select name="sex" class="form-control" id="sex" onkeyup="validateGender()">
												<option value="None"></option>
		                        				<option value="Female">Female</option>
												<option value="Male">Male</option>
												<option value="Other">Other</option>
		                    				</select>
		                    				<label id="sexPrompt"></label>
							  			</div>
							  			
							  			<div class="form-group">
							    			<label for="mobile">Mobile No. <i class="fa fa-mobile fa-lg"></i></label>
							    			<input type="text" class="form-control" id="mobile" onkeyup="validateMobile()" name="mobile" placeholder="Only 10 Digits are Allowed">
							  				<label id="mobilePrompt"></label>
							  			</div>
							  			
							  			<div class="form-group">
							    			<label for="street">Street <i class="fa fa-road fa-lg"></i></label>
							    			<input type="text" class="form-control" id="street" name="street" placeholder="Optional">
							  			</div>
							  			
							  			<div class="form-group">
							    			<label for="city">City <i class="fa fa-map-marker fa-lg"></i></label>
							    			<input type="text" class="form-control" id="city" onkeyup="validateCity()" name="city">
							  				<label id="cityPrompt"></label>
							  			</div>
							  			
							  			<div class="form-group">
							    			<label for="state">State <i class="fa fa-location-arrow fa-lg"></i></label>
							    			<select name="state" class="form-control" id="state" onkeyup="validateState()">
												<option value="None"></option>
												<option value="Andhra Pradesh">Andhra Pradesh</option>
												<option value="Assam">Assam</option>
		                        				<option value="Bihar">Bihar</option>
												<option value="Jharkhand">Jharkhand</option>
												<option value="Maharashtra">Maharashtra</option>
												<option value="West Bengal">West Bengal</option>
												<option value="Other">Other</option>
		                    				</select>
		                    				<label id="statePrompt"></label>
							  			</div>
							  			
							  			<div class="form-group">
							    			<label for="country">Country <i class="fa fa-globe"></i></label>
							    			<select name="country" class="form-control" id="country" onkeyup="validateCountry()">
							    				<option value="None"></option>
												<option value="India">India</option>
		                        				<option value="Nepal">Nepal</option>
												<option value="Bhutan">Bhutan</option>
												<option value="Mauritius">Mauritius</option>
												<option value="United States">United States</option>
												<option value="Other">Other</option>
		                    				</select>
		                    				<label id="countryPrompt"></label>
							  			</div>
							  			
									</div>
									
									<div class="col-md-5 col-md-offset-2">
										
										<h3><strong>Education Details</strong></h3><hr>
							  			<div class="form-group">
							    			<label for="institute">Institute <i class="fa fa-university fa-lg"></i></label>
							    			<select name="institute" class="form-control" id="institute" onkeyup="validateInstitute()">
							    				<option value="None"></option>
												<option value="NIT Durgapur">NIT Durgapur</option>
		                        				<option value="NIT Waranagl">NIT Waranagl</option>
												<option value="NIT Delhi">NIT Delhi</option>
												<option value="IIT Kharagpur">IIT Kharagpur</option>
												<option value="BC Roy">BC Roy</option>
												<option value="BCET">BCET</option>
												<option value="Other">Other</option>
		                    				</select>
							    			<label id="institutePrompt"></label>
							  			</div>
							  			
							  			<div class="form-group">
							    			<label for="registration">Registration No. <i class="fa fa-info-circle fa-lg"></i></label>
							    			<input type="text" class="form-control" id="registration" name="registration" onkeyup="validateRegistration()">
							    			<label id="registrationPrompt"></label>
							  			</div>
										
										<div class="form-group">
							    			<label for="course">Course <i class="fa fa-book fa-lg"></i></label>
							    			<select name="course" class="form-control" id="course" onkeyup="validateCourse()">
												<option value="None"></option>
		                        				<option value="Under Graduate">Under Graduate</option>
												<option value="Post Graduate">Post Graduate</option>
												<option value="PhD">PhD</option>
												<option value="Other">Other</option>
		                    				</select>
		                    				<label id="coursePrompt"></label>
							  			</div>
							  			
							  			<div class="form-group">
							    			<label for="department">Department <i class="fa fa-graduation-cap fa-lg"></i></label>
							    			<select name="department" class="form-control" id="department" onkeyup="validateDepartment()">
												<option value="None"></option>
	                        					<option value="Biotechnology">Biotechnology</option>
												<option value="Chemical Engineering">Chemical Engineering</option>
												<option value="Chemistry">Chemistry</option>
												<option value="Civil Engineering">Civil Engineering</option>
												<option value="Computer Applications">Computer Applications</option>
												<option value="Computer Science and Engineering">Computer Science and Engineering</option>
												<option value="Electrical Engineering">Electrical Engineering</option>
												<option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
												<option value="Information Technology">Information Technology</option>
												<option value="Mathematics">Mathematics</option>
												<option value="Mechanical Engineering">Mechanical Engineering</option>
												<option value="Metallurgical and Materials Engineering">Metallurgical and Materials Engineering</option>
												<option value="Physics">Physics</option>
		                    				</select>
		                    				<label id="departmentPrompt"></label>
							  			</div>
							  			
							  			<div class="form-group">
							    			<label for="roll">Roll No.<i class="fa fa-key fa-lg"></i></label>
							    			<input type="text" class="form-control" id="roll" name="roll" onkeyup="validateRoll()"> Ex:- 12/IT/43
							  				<label id="rollPrompt"></label>
							  			</div>
							  			
							  			<div class="form-group">
							    			<label for="cgpa">CGPA <i class="fa fa-sort-numeric-asc fa-lg"></i></label>
							    			<input type="text" class="form-control" id="cgpa" name="cgpa" onkeyup="validateCgpa()" placeholder="Upto 2 Decimal places">
							  				<label id="cgpaPrompt"></label>
							  			</div>
							  			
							  			<div class="form-group">
							    			<label for="photo">Photo Upload <i class="fa fa-file-image-o"></i> <i class="fa fa-upload fa-lg"></i></label>
											<input type="file" class="form-control" name="image" />
							  			</div>
							  			
							  			<div class="form-group">
							    			<label for="cv">CV Upload <i class="fa fa-file"></i> <i class="fa fa-upload fa-lg"></i></label>
											<input type="file" class="form-control" name="cv" />
							  			</div>
										
									</div>
									
								</div>
								<br><hr>
								<h3><strong>Account Details</strong></h3><hr>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
							    			<label for="email">Email <i class="fa fa-envelope fa-lg"></i></label>
											<input type="text" class="form-control" name="email" id="email" onkeyup="validateEmail()" placeholder="Enter your Email-id"/>
											<label id="emailPrompt"></label>
							  			</div>
									</div>
									
									<div class="col-md-3 col-md-offset-1">
										<div class="form-group">
							    			<label for="pwd">Password <i class="fa fa-unlock-alt fa-lg"></i></i></label>
											<input type="password" class="form-control" name="pwd" id="pwd" onkeyup="validatePwd()" placeholder="Enter your Password"/>
							  				<label id="pwdPrompt"></label>
							  			</div>
									</div>
									
									<div class="col-md-3 col-md-offset-1">
										<div class="form-group">
							    			<label for="repeat">Confirm Password <i class="fa fa-unlock fa-lg"></i></label>
											<input type="password" class="form-control" name="repeat" id="repeat" onkeyup="validateRepeat()" placeholder="Repeat Password"/>
							  				<label id="repeatPrompt"></label>
							  			</div>
									</div>
								</div>
								<br>
					  			<button type="submit" onclick=" return validateForm()" class="btn btn-success btn-lg" >Sign Up <i class="fa fa-user-plus"></i></button>
					  			<input type="hidden" name="submitted" value="1" >
					  			<label id="formPrompt"></label>
					  			
					  			<button type="reset" class="btn btn-danger btn-lg" value="Reset">Reset <i class="fa fa-refresh fa-spin"></i></button>
					  			<p style="float: right;"><strong style="color: #990033">Already Registered ? </strong><button class="btn btn-primary btn-lg" ><a href="admin/index.php" style="text-decoration:none"><strong style="color: white;">Go and Login <i class="fa fa-sign-in"></i></strong></a></button></p>
							
							</form>
						</div>		<!-- END panel-body -->
					</div>		<!-- END Panel -->		
				</div>		<!-- END Column -->
			</div>		<!-- END Row -->	
		</div>
		
		<?php include ('template/footer.php'); ?>		<!-- Page Footer -->	
	
		<script type="text/javascript" src="config/files/js/javascript.js"></script>
	</body>
	
</html>