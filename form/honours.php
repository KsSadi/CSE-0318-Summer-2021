<?php
$location = APP_URL.'login/';
// Check if already logged in
if( !is_logged_in() ) header("Location: $location");


$error['semester_th'] = true;
$error['year_date'] = true;
$error['semester_month'] = true;



// Check user has changed picture
if(get_value('picture', false) == 'assets/uploads/default.jpg'){
	$message = '<div class="alert alert-danger" role="alert">You must change the <a href="'.APP_URL.'change-picture/">Picture</a> before completing the form.</div>';
	return;
}


if(isset($_POST['submit'])){

	$error['semester_th'] = form_check('semester_th', $_POST['semester_th']);
	$error['year_date'] = form_check('year_date', $_POST['year_date']);
	$error['semester_month'] = form_check('semester_month', $_POST['semester_month']);
	

	// Initial check finished.
	//echo array_search(false, $error);
	if(!in_array(false, $error)){ // There is no error

		
		$semester_th = htmlspecialchars($_POST['semester_th']);
		$year_date = htmlspecialchars($_POST['year_date']);
		$semester_month = htmlspecialchars($_POST['semester_month']);
		
//course_credit
		$course = merged_courses($_POST['course_no'], $_POST['course_title'], $_POST['course_credit']);
		if(empty($course)){
			$message = '<div class="alert alert-danger" role="alert">Minimum 1 course required.</div>';
			return;
		}
		
		$courses = json_encode($course);
		$date = time();
		$status = 0;
		$admission_roll = current_user();
		$sql = "INSERT INTO honours_application (
				admission_roll,
				
				semester_th,
				year_date,
				semester_month,
				courses,
				date,
				status
				) VALUES (
				
				'$admission_roll',
				
				
				'$semester_th',
				'$year_date',
				'$semester_month',
				'$courses',
			
				'$date',
				'$status'
				)
				";
		
		if(mysqli_query($conn, $sql)){
			$message = '<div class="alert alert-success" role="alert">Your application is received . You can download it from <a href="'.APP_URL.'honours-application-list/">Application List</a> </div>';
			foreach ($_POST as &$value) {
				$value = '';
			}
		}
		else{
			$message = '<div class="alert alert-danger" role="alert">Not received .Try again. </div>'.mysqli_error($conn); //
		}
	}
}
?>