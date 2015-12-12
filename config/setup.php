<?php 

// Setup File:

# Database Connection:
include('config/connection.php');

# Functions:
//include ('functions/database.php');
//include ('functions/template.php');

# Site Setup:
//$debug = data_setting_value($dbc,'debug-status');

//$site_title = "AtomCMS 2.0" ;

if(isset($_GET['page'])){
	
	$rowId = $_GET['page'];			// Set $rowId equal to the value given in the URL.
}
else {
	
	$rowId = 1;						// Set $rowId equal to 1 or the Home Page.
}

# Page Setup
#$row = details($dbc, $rowId);


?>