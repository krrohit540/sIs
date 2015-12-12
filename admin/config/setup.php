<?php 

	// Setup File:
	
	# Database Connection:
	include ('../config/connection.php');
	
	# Functions:
	include ('functions/database.php');
	
	
	# Page Setup
	$user = individual($dbc, $_SESSION['username']) ;
	
	$rows = all_user($dbc, $_SESSION['username']);
	
?>