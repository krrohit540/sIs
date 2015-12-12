<?php 

function data_setting_value($dbc,$id) {

	$q = "SELECT * FROM settings where id = '$id'" ;
	$r = mysqli_query($dbc, $q);
	
	$data = mysqli_fetch_assoc($r);
	
	return $data['value'];
		
}

function details($dbc, $rowId) {
	
	$query = "SELECT * FROM pages where id = $rowId" ;
	$query_object = mysqli_query($dbc, $query);

	$row = mysqli_fetch_assoc($query_object);
	
	$row['body_nohtml'] = strip_tags($row['body']);
	
	if($row['body_nohtml'] == $row['body']){
		
		$row['body_formatted'] = '<p>'.$row['body'].'</p>' ;	
	}
	else {
		$row['body_formatted'] = $row['body'];
	}
	
	
	return $row;
	
}	

?>