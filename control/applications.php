<?php

// Check user is logged in
$location = APP_URL.'login/';
if(!is_logged_in()){
	header("Location: $location");
	exit;
}
$admission_roll = current_user();
$sql = "SELECT * FROM honours_application WHERE admission_roll='$admission_roll'";
$query = mysqli_query($conn, $sql);





?>