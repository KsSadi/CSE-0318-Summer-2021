<?php
$ok = true;
// Check user is logged in
$location = APP_URL.'login/';
if(!is_logged_in()) header("Location: $location");


// Check ID is provided
if(!isset($_GET['id']) ||  $_GET['id'] == ''){
	echo "Missing application ID";
	exit;
}

// Check ID is valid and belogs to the logged in user
$id = (int) $_GET['id'];
$admission_roll = current_user();
$sql = "SELECT * FROM honours_application WHERE id='$id' AND admission_roll='$admission_roll' LIMIT 1";
$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query) == 0){
	echo "Invalid application ID";
	exit;
}

// Check application is approved
$ai = mysqli_fetch_assoc($query); // Application Info
if($ai['status'] == 0){
	echo 'Application has not been processed and admit cannot be downloaded.';
	exit;
}

// Everything is ok, fetching data

$sql = "SELECT * FROM students WHERE admission_roll='$admission_roll' LIMIT 1";
$query = mysqli_query($conn, $sql);
$si = mysqli_fetch_assoc($query);

$courses = json_decode($ai['courses']);

?>