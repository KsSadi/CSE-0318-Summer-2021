<?php
$location = APP_URL;
// Check if already logged in
if( is_logged_in() ) header("Location: $location");

if(isset($_POST['submit'])){
	
	// Check all fields are filled.
	$admission_roll = htmlspecialchars($_POST['admission_roll']);
	
	if($admission_roll == ''){
		$message = '<div class="alert alert-danger" role="alert">Use the username / registration rolls</div>';
		return;
	}
	
	// Check if the student is registered or not
	
	$sql = "SELECT password FROM students WHERE admission_roll='$admission_roll' LIMIT 1";
	$query = mysqli_query($conn, $sql);
	if(mysqli_num_rows($query) == 0){
		$message = '<div class="alert alert-danger" role="alert">The admission roll was not found</div>';
		return;
	}
	
	// All check finished.
	$date = time();
	$sql = "INSERT INTO reset_requests (admission_roll, date) VALUES ('$admission_roll', '$date')";
	if(mysqli_query($conn, $sql)){
		$message = '<div class="alert alert-success" role="alert">Submitted successfully. Your new password will be sent to your mobile via SMS.</div>';
		return;
	}
	else{
		$message = '<div class="alert alert-danger" role="alert">Failed. Try again.</div>';
		return;
	}
	
}

?>