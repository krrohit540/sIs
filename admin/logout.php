<?php

	# Start session:
	session_start();
	
	unset($_SESSION['username']);		// Delete the username key
	
	//session_destroy();				// This would delete all the session keys
	
	header('Location: login.php'); 		// Redirect to login.php

?>