<?php 
$ok = true;


/*
	No more used.
=====================================
// Check if admission roll is submitted
if(!isset($_GET['admission_roll'])){
	$ok = false;
	return;
} 

// Check admission roll is not empty
if(isset($_GET['admission_roll']) && $_GET['admission_roll'] == ''){
	$ok = false;
	$message = callout('Failed', 'Provide admission roll to create improvement application.', 'danger', false);
	return;
}

// Check admission roll exists on database
$admission_roll = (int) $_GET['admission_roll'];

$sql = "SELECT id FROM students WHERE admission_roll='$admission_roll' LIMIT 1";
if(mysqli_num_rows(mysqli_query($conn, $sql)) == 0){
	$ok = false;
	$message = callout('Failed', 'Student with given admission roll was not found.', 'danger', false);
	return;
}
===================================
*/
$error['admission_roll'] = true;
$error['department'] = true;
$error['exam_roll'] = true;
$error['current_year_th'] = true;
$error['current_semester_th'] = true;
$error['read_year_th'] = true;
$error['read_semester_th'] = true;

$error['name_bn'] = true;
$error['name_en'] = true;
$error['name_f'] = true;
$error['name_m'] = true;
$error['mobile'] = true;
$error['session'] = true;
$error['reg_no'] = true;



if(isset($_POST['submit'])){

	$error['admission_roll'] = form_check('admission_roll', $_POST['admission_roll']);
	$error['department'] = form_check('department', $_POST['department']);
	$error['exam_roll'] = form_check('exam_roll', $_POST['exam_roll']);
	$error['current_year_th'] = form_check('current_year_th', $_POST['current_year_th']);
	$error['current_semester_th'] = form_check('current_semester_th', $_POST['current_semester_th']);
	//$error['read_year_th'] = form_check('read_year_th', $_POST['read_year_th']);
	//$error['read_semester_th'] = form_check('read_semester_th', $_POST['read_semester_th']);

	$error['name_bn'] = form_check('name_bn', $_POST['name_bn']);
	$error['name_en'] = form_check('name_en', $_POST['name_en']);
	$error['name_f'] = form_check('name_f', $_POST['name_f']);
	$error['name_m'] = form_check('name_m', $_POST['name_m']);
	$error['mobile'] = form_check('mobile', $_POST['mobile']);
	$error['session'] = form_check('session', $_POST['session']);
	$error['reg_no'] = form_check('reg_no', $_POST['reg_no']);
	
	// Initial check finished.
	//echo array_search(false, $error);
	if(!in_array(false, $error)){ // There is no error

		$admission_roll = htmlspecialchars($_POST['admission_roll']);
		$department = htmlspecialchars($_POST['department']);
		$exam_roll = htmlspecialchars($_POST['exam_roll']);
		$current_year_th = htmlspecialchars($_POST['current_year_th']);
		$current_semester_th = htmlspecialchars($_POST['current_semester_th']);
		$read_year_th = htmlspecialchars($_POST['read_year_th']);
		$read_semester_th = htmlspecialchars($_POST['read_semester_th']);

		$name_bn = htmlspecialchars($_POST['name_bn']);
		$name_en = htmlspecialchars($_POST['name_en']);
		$name_f = htmlspecialchars($_POST['name_f']);
		$name_m = htmlspecialchars($_POST['name_m']);
		$mobile = htmlspecialchars($_POST['mobile']);
		$session = htmlspecialchars($_POST['session']);
		$reg_no = htmlspecialchars($_POST['reg_no']);
		
		$courses_array = merged_courses_2($_POST['course_semester'], $_POST['course_no'],  $_POST['course_title'],  $_POST['course_gpa']);
		if(empty($courses_array)){
			$message = '<div class="alert alert-danger" role="alert">কমপক্ষে একটি কোর্স উল্লেখ করুন</div>';
			return;
		}

		$courses = json_encode($courses_array, JSON_UNESCAPED_UNICODE);
		
		
		// Check 3 improvement exam was already done in any course
		foreach($courses_array as $course){
			if(appearance_count($course[1], $admission_roll) >= 3){
				$message = callout('Failed','The application could not be submitted because the student has already appeared 3 times in some courses. ('.$course[1].')', 'danger', false);
				return;
			}
		}
	
	
		$date = time();
		$status = 1;
		$admission_roll = current_user();
		$sql = "INSERT INTO improvement_application (
				admission_roll,
				exam_roll,
				department,
				current_year_th,
				current_semester_th,
				read_year_th,
				read_semester_th,
				courses,
				date,
				status,
				
				session,
				reg_no,
				name_en,
				name_bn,
				name_f,
				name_m,
				mobile_no
				) VALUES (
				
				'$admission_roll',
				'$exam_roll',
				'$department',
				'$current_year_th',
				'$current_semester_th',
				'$read_year_th',
				'$read_semester_th',
				'$courses',
				'$date',
				'$status',
				
				'$session',
				'$reg_no',
				'$name_en',
				'$name_bn',
				'$name_f',
				'$name_m',
				'$mobile'
				)
				";
		
		if(mysqli_query($conn, $sql)){
			$message = callout('Success', '<a href="'.$admin_url.'improvement_application.php?id='.mysqli_insert_id($conn).'">Your application</a> was submitted successfully.', 'success', false);
			$ok = false;
			foreach ($_POST as &$value) {
				$value = '';
			}
		}
		else{
			$ok = false;
			$message = callout('Failed', 'Application could not be accepted. Try again.'.mysqli_error($conn), 'danger', false);
			return;
		}
	}
}

?>