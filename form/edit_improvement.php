<?php
$ok = true;
$location = APP_URL.'login/';
// Check if already logged in
if( !is_logged_in() ) header("Location: $location");

// Check ID is provided
if(!isset( $_GET['id']) || $_GET['id'] == ''){
	$message = '<div class="alert alert-danger" role="alert">The form was not found</div>';
	$ok = false;
	return;
}
$id = (int) $_GET['id'];
// Check ID is valid and belongs to the logged in user
$admission_roll = current_user();
$sql = "SELECT courses FROM improvement_application WHERE id='$id' AND admission_roll='$admission_roll'";
$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query) == 0){
	$message = '<div class="alert alert-danger" role="alert">The form was not found</div>';
	$ok = false;
	return;
}

$error['department'] = true;
$error['exam_roll'] = true;
$error['current_year_th'] = true;
$error['current_semester_th'] = true;
$error['read_year_th'] = true;
$error['read_semester_th'] = true;

// Check user has changed picture
if(get_value('picture', false) == 'assets/uploads/default.jpg'){
	$message = '<div class="alert alert-danger" role="alert">You must change the <a href="'.APP_URL.'change-picture/">Picture</a> before completing the form.</div>';
	$ok = false;
	return;
}

$result = mysqli_fetch_assoc($query);
$current_courses = json_decode($result['courses']);

if(isset($_POST['submit'])){

	$error['department'] = form_check('department', $_POST['department']);
	$error['exam_roll'] = form_check('exam_roll', $_POST['exam_roll']);
	$error['current_year_th'] = form_check('current_year_th', $_POST['current_year_th']);
	$error['current_semester_th'] = form_check('current_semester_th', $_POST['current_semester_th']);
	//$error['read_year_th'] = form_check('read_year_th', $_POST['read_year_th']);
	//$error['read_semester_th'] = form_check('read_semester_th', $_POST['read_semester_th']);
	
	
	// Initial check finished.
	//echo array_search(false, $error);
	
	if(!in_array(false, $error)){ // There is no error

		$department = htmlspecialchars($_POST['department']);
		$exam_roll = htmlspecialchars($_POST['exam_roll']);
		$current_year_th = htmlspecialchars($_POST['current_year_th']);
		$current_semester_th = htmlspecialchars($_POST['current_semester_th']);
		$read_year_th = htmlspecialchars($_POST['read_year_th']);
		$read_semester_th = htmlspecialchars($_POST['read_semester_th']);

		$courses_array = merged_courses_2($_POST['course_semester'], $_POST['course_no'],  $_POST['course_title'],  $_POST['course_gpa']);
		if(empty($courses_array)){
			$message = '<div class="alert alert-danger" role="alert">Please specify at least one course</div>';
			return;
		}
		
		$courses = json_encode($courses_array, JSON_UNESCAPED_UNICODE);

		$date = time();
		$status = 0;
		$admission_roll = current_user();
		
		$sql = "UPDATE improvement_application SET
				admission_roll ='$admission_roll',
				exam_roll = '$exam_roll',
				department = '$department',
				current_year_th = '$current_year_th',
				current_semester_th = '$current_semester_th',
				read_year_th = '$read_year_th',
				read_semester_th = '$read_semester_th',
				courses = '$courses',
				date = '$date',
				status = '$status'
				
				WHERE id = '$id'
				";
		
		if(mysqli_query($conn, $sql)){
			$message = '<div class="alert alert-success" role="alert">Your application has been re-received.Download from<a href="'.APP_URL.'honours-application-list/">Application Section</a></div>';
			foreach ($_POST as &$value) {
				$value = '';
			}
		}
		else{
			$message = '<div class="alert alert-danger" role="alert">Application not accepted. Please try again. </div>'; //
		}
	}
	
}
?>