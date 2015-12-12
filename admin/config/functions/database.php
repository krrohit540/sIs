<?php 

	function individual($dbc, $email) {
	
		$q = "SELECT * FROM users where email = '$email'" ;
		$r = mysqli_query($dbc, $q);
		
		$user = mysqli_fetch_assoc($r);
		
		return $user;	
	}
	
	function all_user($dbc, $email) {
		
		$query = "SELECT * FROM users WHERE email != '$email'" ;
		$rows = mysqli_query($dbc, $query);
		
		return $rows;
	}
?>