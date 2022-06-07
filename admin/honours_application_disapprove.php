<?php
include('parts/header.php');

if(is_logged_in()){
	$id = (int) $_POST['id'];
	$reason = $_POST['reason'];
	$admission_roll = $_POST['admission_roll'];

	if(!empty($id) && !empty($reason) && !empty($admission_roll)){
		// Update honours_application
		$sql1 = "UPDATE honours_application SET status ='-1' WHERE id='$id'";
		// Adding new notice to the user
		$title = 'Your honours exam examination application was disapproved.';
		$message = 'Your <a href="'.APP_URL.'download-honours-application-form/'.$id.'">honours application</a> was dissapproved for the following reason.<br><br>
		'.$reason;
		$date = time();
		$is_read = 0;
		
		$sql2 = "INSERT INTO private_notice (
			admission_roll,
			title,
			message,
			date,
			is_read
			) VALUES (
			'$admission_roll',
			'$title',
			'$message',
			'$date',
			'$is_read'
			)";
		
		if(mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2)) echo "success";
		exit;
	}

}


//print_r($_POST);


echo "failed"; // mysqli_error($conn);//




?>