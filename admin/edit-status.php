<?php

	# Start the session:
	session_start();
	
	if(!isset($_SESSION['username'])) {
		header('Location: login.php');	
	}

?>

<?php 
	
	if(isset($_POST['uid'])) {
		
		include ('config/setup.php');
		
		$id = $_POST['uid'];
		
		$temp = "SELECT * FROM users WHERE id = '$id'" ;
		$row = mysqli_query($dbc, $temp);
		
		$data = mysqli_fetch_assoc($row);
		
		if($data['status'] == 0)
			$q = "UPDATE users SET status = 1 WHERE id = '$id'" ;
		else 
			$q = "UPDATE users SET status = 0 WHERE id = '$id'" ;
		
		$r = mysqli_query($dbc, $q);
		
		if($r) {
			
			//echo '<p>User is successfully updated !  :)</p>';
			header('Location: admin-login.php');
		}
		else {
			echo '<p>Page could not be loaded because : </p>'.mysqli_error($dbc);
			echo '<p>'. $q .'</p>';
		}
	}	
?>
