<?php
$location = APP_URL.'login/';
// Check if already logged in
if( !is_logged_in() ) header("Location: $location");


$error['current_year_th'] = true;
$error['current_semester_th'] = true;



// Check user has changed picture
if(get_value('picture', false) == 'assets/uploads/default.jpg'){
	$message = '<div class="alert alert-danger" role="alert">You must change the <a href="'.APP_URL.'change-picture/">Picture</a> before completing the form.</div>';
	return;
}


if(isset($_POST['submit'])){

	//$error['read_year_th'] = form_check('read_year_th', $_POST['read_year_th']);
	

	// Initial check finished.
	//echo array_search(false, $error);
	if(!in_array(false, $error)){ // There is no error

		
		$current_year_th = htmlspecialchars($_POST['current_year_th']);
		$current_semester_th = htmlspecialchars($_POST['current_semester_th']);
		
		

		$courses_array = merged_courses_2($_POST['course_semester'], $_POST['course_no'],  $_POST['course_title'],  $_POST['course_gpa']);
		if(empty($courses_array)){
			$message = '<div class="alert alert-danger" role="alert">Please specify at least one course</div>';
			return;
		}

		$courses = json_encode($courses_array, JSON_UNESCAPED_UNICODE);

		$date = time();
		$status = 0;
		$admission_roll = current_user();
		
		$si = get_user_info(array('name_en', 'admission_roll', 'dept_s','mobile_no') ,$admission_roll);
		
		
		
		$name_en = $si['name_en'];
		$admission_roll = $si['admission_roll'];
		
		$dept_s = $si['dept_s'];
		$mobile_no = $si['mobile_no'];
		$sql = "INSERT INTO improvement_application (
				admission_roll,
				
				
				current_year_th,
				current_semester_th,
			
					courses,
				date,
				status,
				
				
				
				name_en,
				admission_roll,
				
				dept_s,
				mobile_no
				) VALUES (
				
				'$admission_roll',
			
				
				'$current_year_th',
				'$current_semester_th',
			
				'$courses',
				'$date',
				'$status',
				
				
				
				'$name_en',
				
			
				'$dept_s',
				'$mobile_no'
				)
				";
		
		if(mysqli_query($conn, $sql)){
			$message = '<div class="alert alert-success" role="alert">Your application has been accepted.Download it from <a href="'.APP_URL.'improvement-application-list/">Application Section</a> </div>';
			foreach ($_POST as &$value) {
				$value = '';
			}
		}
		else{
			$message = '<div class="alert alert-danger" role="alert">Application not accepted. Please try again.</div>'.mysqli_error($conn); //
		}
	}
}
?>