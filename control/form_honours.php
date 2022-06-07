<?php
$ok = true;
// Check user is logged in 
$location = APP_URL.'login/';
if(!is_logged_in() && !is_admin()){
	header("Location: $location");
} 


// Check ID is provided
if(!isset($_GET['id']) ||  $_GET['id'] == ''){
	echo "Missing application ID";
	exit;
}

// Check ID is valid and 'belogs to the logged in user' (admin can override it)

if(is_admin()){ // for admin
	$id = (int) $_GET['id'];
	$sql = "SELECT * FROM honours_application WHERE id='$id' LIMIT 1";
	$query = mysqli_query($conn, $sql);
	if(mysqli_num_rows($query) == 0){
		echo "Application was deleted by admin.";
		exit;
	}
	
	$ai = mysqli_fetch_assoc($query);
}
else{ // for students
	$id = (int) $_GET['id'];
	$admission_roll = current_user();
	$sql = "SELECT * FROM honours_application WHERE id='$id' AND admission_roll='$admission_roll' LIMIT 1";
	$query = mysqli_query($conn, $sql);
	if(mysqli_num_rows($query) == 0){
		echo "Invalid application ID";
		exit;
	}
	
	// Check application is pending
	$ai = mysqli_fetch_assoc($query); // Application Info (Cancelled due to request)
	if(1 == 2){ //$ai['status'] == 1
		echo 'Application has already been processed and cannot be downloaded.';
		exit;
	}
}

// Everything is ok, fetching data
$admission_roll = $ai['admission_roll']; // Fetching it for admin again
$sql = "SELECT * FROM students WHERE admission_roll='$admission_roll' LIMIT 1";
$query = mysqli_query($conn, $sql);
$si = mysqli_fetch_assoc($query);

$courses = json_decode($ai['courses']);

?>