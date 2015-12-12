<?php

	//Do all the submission part or storing in DB work all here
	
	#Database connection
	include('config/connection.php');
	
	if(isset($_POST['submitted']) == 1){
		
		// Image Upload:
		$image_type = $_FILES['image']['type'];
		if(($image_type == 'image/gif') || ($image_type == 'image/jpeg') || ($image_type == 'image/png') && ($_FILES['image']['size'] < 200000))
		{
			if($_FILES['image']['error'] > 0)
				echo "return code" . $_FILES['image']['error'];
			else if(file_exists('upload/'.$_FILES['image']['name']))
				echo $_FILES['image']['name']."Already Exists";				
			else if (move_uploaded_file($_FILES['image']['tmp_name'], 'upload/'.$_FILES['image']['name'])) {
				$pic = $_FILES['image']['name'];
			}
		}
		
		// CV Upload:
		$file_type = $_FILES['cv']['type'];
		if((($file_type == 'application/msword') || ($file_type == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') || ($file_type == 'application/pdf')) && ($_FILES['cv']['size'] < 200000))
		{
				
			if($_FILES['cv']['error'] > 0)
				echo "return code" . $_FILES['cv']['error'];
			else if(file_exists('resume/'.$_FILES['cv']['name']))
				echo $_FILES['cv']['name']."Already Exists";				
			else if (move_uploaded_file($_FILES['cv']['tmp_name'], 'resume/'.$_FILES['cv']['name'])) {
				$file = $_FILES['cv']['name'];
			}
		}
		
		$query = "INSERT INTO users (name, email, password, birthdate, gender, mobile, street, city, state, country, institute, registration, course, department,
		 		  roll, cgpa, photo, cv) VALUES ('$_POST[name]','$_POST[email]','$_POST[pwd]', '$_POST[bday]','$_POST[sex]', '$_POST[mobile]', 
		 		  '$_POST[street]', '$_POST[city]', '$_POST[state]', '$_POST[country]', '$_POST[institute]', '$_POST[registration]', '$_POST[course]','$_POST[department]',
		 		  '$_POST[roll]', '$_POST[cgpa]', '$pic', '$file')" ;

		$row = mysqli_query($dbc, $query);
		
		if($row) {
			
			//echo '<p>User is successfully added but wait: not verified yet by the Great Admin !  :P</p>';
			header('Location: admin/login.php');
		}
		else {
			echo '<p>Page could not be loaded because : </p>'.mysqli_error($dbc);
			echo '<p>'. $query .'</p>';
		}	
	}
	
?>