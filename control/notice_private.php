<?php
$ok = true;

// Check user is logged in
$location = APP_URL.'login/';
if(!is_logged_in()) header("Location: $location");


// Check ID is provided
if(!isset($_GET['id']) || $_GET['id'] == ''){
	$message = alert('Notice not found','danger', false); //Provide a notice ID
	$ok = false;
	return;
}

// Check ID is valid and belongs to the user
$admission_roll = current_user();
$id = (int) $_GET['id'];
$sql = "SELECT * FROM private_notice WHERE id='$id' AND admission_roll='$admission_roll' LIMIT 1";
$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query) == 0){
	$message = alert('Notice not found','danger', false); // Invalid notice id
	$ok = false;
	return;
}

$result = mysqli_fetch_assoc($query);

// Updating is_read

if($result['is_read'] == 0) mysqli_query($conn, "UPDATE private_notice SET is_read='1' WHERE id='$id'");
?>