<?php
include('parts/header.php');

if(is_logged_in()){
	$id = (int) $_POST['id'];
	$type = $_POST['type'];
	$admission_roll = $_POST['admission_roll'];

	if(!empty($id) && !empty($type) && !empty($admission_roll)){
		// Delete the application
		$sql = "DELETE FROM $type WHERE id='$id'";
		
		if(mysqli_query($conn, $sql)) echo "success";
		exit;
	}
}

echo "failed"; // mysqli_error($conn);

?>