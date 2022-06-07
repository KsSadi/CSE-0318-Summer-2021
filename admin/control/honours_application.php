<?php
$ok = true;
// Check ID is provided
if(!isset($_GET['id']) || $_GET['id']==''){
	$message = callout('Missing Application ID','Provide an application ID to get details','danger', false);
	$ok = false;
	return;
}

// Check ID is valid
$id = (int) $_GET['id'];
$sql = "SELECT * FROM honours_application WHERE id='$id' LIMIT 1";
$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query) == 0){
	$message = callout('Application not found','The ID is either invalid or does not exist in the database.', 'danger',false);
	$ok = false;
	return;
}
$ai = mysqli_fetch_assoc($query);
$si = get_user_info(array(), $ai['admission_roll']); // student info

if(isset($_GET['approve'])){
	if(mysqli_query($conn, "UPDATE honours_application SET status='1' WHERE id='$id'"))
		$message = callout('Success','The application was approved.', 'success',false);
	else $message = callout('Failed','The application could not be approved. Try again.', 'danger',false);
}

?>