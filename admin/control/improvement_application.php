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
$sql = "SELECT * FROM improvement_application WHERE id='$id' LIMIT 1";
$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query) == 0){
	$message = callout('Application not found','The ID is either invalid or does not exist in the database.', 'danger',false);
	$ok = false;
	return;
}
$ai = mysqli_fetch_assoc($query);
$si = get_user_info(array(), $ai['admission_roll']); // student info

if(isset($_GET['approve'])){
	
	
	$sql = "SELECT admission_roll, courses, status FROM improvement_application WHERE id='$id'";
	$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
	$admission_roll = $result['admission_roll'];
	$courses = json_decode($result['courses']);
	$status = $result['status'];
	
	// Check if already approved
	if($status == 1){
		$message = callout('Failed','The application is already approved.', 'danger', false);
		return;
	}
	
	// Check 3 improvement exam was already done in any course
	foreach($courses as $course){
		if(appearance_count($course[1], $admission_roll) >= 3){
			$message = callout('Failed','The application could not be approved because the student has already appeared 3 times in some courses. ('.$course[1].')', 'danger', false);
			return;
		}
	}
	
	
	
	$sql = "UPDATE improvement_application SET status='1' WHERE id='$id'";
	$query1 = mysqli_query($conn, $sql);
	
	// Send a private notice if student is registered.
	if(mysqli_num_rows(mysqli_query($conn, "SELECT id FROM students WHERE admission_roll='$admission_roll' LIMIT 1")) == 1 )
	
	$title = 'Your improvement exam application was approved.';
	$message_db = 'Your <a href="'.APP_URL.'download-improvement-application-form/'.$id.'" target="_blank">improvement application</a> was approved. Now you can apply for the improvement exam.<br><br>';
	$date = time();
	$is_read = 0;
		
	$sql = "INSERT INTO private_notice (
			admission_roll,
			title,
			message,
			date,
			is_read
			) VALUES (
			'$admission_roll',
			'$title',
			'$message_db',
			'$date',
			'$is_read'
			)";
			
	if(mysqli_num_rows(mysqli_query($conn, "SELECT id FROM students WHERE admission_roll='$admission_roll' LIMIT 1")) == 1 )
		$query2 = mysqli_query($conn, $sql);
		
	if($query1) $message = callout('Success','The application was approved.', 'success', false);
	else $message = callout('Failed','The application could not be approved. Try again.', 'danger', false);
	
	
}

?>