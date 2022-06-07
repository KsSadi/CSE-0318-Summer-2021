<?php
$location = APP_URL;
// Check if already logged in
if( is_logged_in() ) header("Location: $location");

if(isset($_POST['submit'])){
	
	// Check all fields are filled.
	$admission_roll = htmlspecialchars($_POST['admission_roll']);
	
	if($admission_roll == ''){
		$message = '<div class="alert alert-danger" role="alert">Enter Admission Roll </div>';
		return;
	}
	
	$password = htmlspecialchars($_POST['password']);
	
	if($password == ''){
		$message = '<div class="alert alert-danger" role="alert">Enter Password</div>';
		return;
	}
	
	// Check if the student is registered or not
	
	$sql = "SELECT password FROM students WHERE admission_roll='$admission_roll' LIMIT 1";
	$query = mysqli_query($conn, $sql);
	if(mysqli_num_rows($query) == 0){
		$message = '<div class="alert alert-danger" role="alert">You have not registered yet.</div>';
		return;
	}
	
	// Check password match
	$result = mysqli_fetch_assoc($query);
	if(md5($password) != $result['password']){
		$message = '<div class="alert alert-danger" role="alert">The password you entered is incorrect</div>';
		return;
	}
	
	// All check finished.
	if(isset($_POST['remember_me'])) $time = 24*3600*30; else $time = 24*8400;
	
	
	$cookie = base64_encode ("$admission_roll:" . md5(md5 ($password)));
	
	setcookie ('d59v_a', $cookie, time()+ $time, "/"); // 'd59v_a' puzzled characters for safety reason
	header("Location: $location");
	
	
}

?>