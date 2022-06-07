<?php
$location = APP_URL.'login/';
// Check if already logged in
if( !is_logged_in() ) header("Location: $location");



$error['password_old'] = true;
$error['password'] = true;
$error['password2'] = true;



if(isset($_POST['submit'])){

	$error['password_old'] = form_check('password_old', $_POST['password_old']);
	$error['password'] = form_check('password', $_POST['password']);
	
	if($_POST['password'] != $_POST['password2']) $error['password2'] = false;
	
	// Initial check finished.
	//echo array_search(false, $error);
	if(!in_array(false, $error)){ // There is no error

		
		$password = md5(htmlspecialchars($_POST['password']));

	
	
		$admission_roll = current_user();
		$sql = "UPDATE students SET
				password = '$password'
				WHERE admission_roll = '$admission_roll'
				";
		
		if(mysqli_query($conn, $sql)){
			$message = '<div class="alert alert-success" role="alert">Password changed. <a href="'.APP_URL.'login/">Log in again</a></div>';
			$hide_form = true;

		}
		else{
			$message = '<div class="alert alert-danger" role="alert">The password was not changed. Please try again</div>'.mysqli_error($conn); //mysqli_error($conn)
		}
	}
}
?>