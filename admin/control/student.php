<?php
$ok = true;
// Check ID is provided
if(!isset($_GET['id']) || $_GET['id']==''){
	$message = callout('Missing student ID','Provide a student ID to get details','danger', false);
	$ok = false;
	return;
}

// Check ID is valid
$id = (int) $_GET['id'];
$sql = "SELECT admission_roll FROM students WHERE id='$id'";
$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query) == 0){
	$message = callout('Student not found','The ID is either invalid or does not exist in the database.', 'danger',false);
	$ok = false;
	return;
}
$result = mysqli_fetch_assoc($query);

$info = get_user_info(array(), $result['admission_roll']);

?>