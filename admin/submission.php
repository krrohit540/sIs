<?php 

	#Start the session:
	session_start();

	#Database connection:
	include ('../config/connection.php');
	
	if($_POST['student-submit'] == 1) {
		
		$q = "SELECT * FROM users WHERE email = '$_POST[email]' AND password ='$_POST[password]'" ;
		$r = mysqli_query($dbc,$q);
		
		$num = mysqli_num_rows($r);
		$data = mysqli_fetch_assoc($r);
		
		if(($num == 1) && ($data['status'] == 1)) {
			
			$_SESSION['username'] = $_POST['email'];
			header('Location: student-login.php');
		
		} else
			header('Location: login.php');		
	}
	
	else if($_POST['admin-submit'] == 2) {
		
		$q = "SELECT * FROM users WHERE email = '$_POST[email]' AND password ='$_POST[password]' " ;
		$r = mysqli_query($dbc,$q);
		
		$data = mysqli_fetch_assoc($r);
		
		if(($data['admin'] == 1) && ($data['status'] == 1)) {
			
			$_SESSION['username'] = $_POST['email'];
			header('Location: admin-login.php');
		
		} else
			header('Location: login.php');		
	}
	
	else if ($_POST['modified'] == 1) {
		
		$query = "UPDATE users SET name = '$_POST[name]', birthdate = '$_POST[bday]', gender = '$_POST[sex]', mobile = '$_POST[mobile]',
				  street = '$_POST[street]', city = '$_POST[city]', state = '$_POST[state]', country = '$_POST[country]',
				  department = '$_POST[department]', roll = '$_POST[roll]', cgpa = '$_POST[cgpa]' WHERE email = '$_POST[email]'" ;
				  
		$row = mysqli_query($dbc, $query);
		
		if($row) {
			
			//echo '<p>User is successfully updated !  :)</p>';
			header('Location: student-login.php');
		}
		else {
			echo '<p>Page could not be loaded because : </p>'.mysqli_error($dbc);
			echo '<p>'. $query .'</p>';
		}
	}

	else if ($_POST['admin-modified'] == 1) {
		
		$query = "UPDATE users SET institute = '$_POST[institute]', registration = '$_POST[registration]', course = '$_POST[course]' WHERE email = '$_POST[email]'" ;
				  
		$row = mysqli_query($dbc, $query);
		
		if($row) {
			
			//echo '<p>User is successfully updated !  :)</p>';
			header('Location: admin-login.php');
		}
		else {
			echo '<p>Page could not be loaded because : </p>'.mysqli_error($dbc);
			echo '<p>'. $query .'</p>';
		}
	}
?>