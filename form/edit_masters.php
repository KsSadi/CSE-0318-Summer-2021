<?php
$ok = true;
$location = APP_URL.'login/';
// Check if already logged in
if( !is_logged_in() ) header("Location: $location");

// Check ID is provided
if(!isset( $_GET['id']) || $_GET['id'] == ''){
	$message = '<div class="alert alert-danger" role="alert">ফর্মটি পাওয়া যায়নি</div>';
	$ok = false;
	return;
}
$id = (int) $_GET['id'];
// Check ID is valid and belongs to the logged in user
$admission_roll = current_user();
$sql = "SELECT id FROM masters_application WHERE id='$id' AND admission_roll='$admission_roll'";
$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query) == 0){
	$message = '<div class="alert alert-danger" role="alert">ফর্মটি পাওয়া যায়নি</div>';
	$ok = false;
	return;
}

$error['exam_name'] = true;
$error['course_name'] = true;
$error['hall_name'] = true;
$error['semester_th'] = true;
$error['semester_month'] = true;
$error['year_date'] = true;
$error['year_semester'] = true;
$error['year_pass'] = true;
$error['honours_roll'] = true;
$error['honours_result'] = true;

// Check user has changed picture
if(get_value('picture', false) == 'assets/uploads/default.jpg'){
	$message = '<div class="alert alert-danger" role="alert">ফর্ম পূরণের আগে অবশ্যই <a href="'.APP_URL.'change-picture/">ছবি পরিবর্তন করতে হবে।</a></div>';
	$ok = false;
	return;
}

if(isset($_POST['submit'])){


	$error['exam_name'] = form_check('exam_name', $_POST['exam_name']);
	$error['course_name'] = form_check('course_name', $_POST['course_name']);
	$error['hall_name'] = form_check('hall_name', $_POST['hall_name']);
	$error['semester_th'] = form_check('semester_th', $_POST['semester_th']);
	$error['semester_month'] = form_check('semester_month', $_POST['semester_month']);
	$error['year_date'] = form_check('year_date', $_POST['year_date']);
	$error['year_semester'] = form_check('year_semester', $_POST['year_semester']);
	$error['year_pass'] = form_check('year_pass', $_POST['year_pass']);
	$error['honours_roll'] = form_check('honours_roll', $_POST['honours_roll']);
	$error['honours_result'] = form_check('honours_result', $_POST['honours_result']);
	
	
	// Initial check finished.
	//echo array_search(false, $error);
	
	if(!in_array(false, $error)){ // There is no error

		$exam_name = htmlspecialchars($_POST['exam_name']);
		$course_name = htmlspecialchars($_POST['course_name']);
		$hall_name = htmlspecialchars($_POST['hall_name']);
		$semester_th = htmlspecialchars($_POST['semester_th']);
		$semester_month = htmlspecialchars($_POST['semester_month']);
		$year_date = htmlspecialchars($_POST['year_date']);
		$year_semester = htmlspecialchars($_POST['year_semester']);
		$year_pass = htmlspecialchars($_POST['year_pass']);
		$honours_roll = htmlspecialchars($_POST['honours_roll']);
		$honours_result = htmlspecialchars($_POST['honours_result']);

		$date = time();
		$status = 0;
		$admission_roll = current_user();
		
		$sql = "UPDATE masters_application SET
				admission_roll='$admission_roll',
				exam_name='$exam_name',
				course_name='$course_name',
				hall_name='$hall_name',
				semester_th='$semester_th',
				semester_month='$semester_month',
				year_date='$year_date',
				year_semester='$year_semester',
				year_pass='$year_pass',
				honours_roll='$honours_roll',
				honours_result='$honours_result',
				status='$status',
				date='$date'
				
				WHERE id='$id'
				";
		
		if(mysqli_query($conn, $sql)){
			$message = '<div class="alert alert-success" role="alert">আপনার অ্যাপলিকেশন পুনরায় গৃহীত হয়েছে। <a href="'.APP_URL.'honours-application-list/">অ্যাপলিকেশন সেকশন</a> থেকে ফর্মটি ডাউনলোড করুন।</div>';
			foreach ($_POST as &$value) {
				$value = '';
			}
		}
		else{
			$message = '<div class="alert alert-danger" role="alert">অ্যাপলিকেশন গৃহীত হয়নি। আবার চেষ্টা করুন। </div>'; //
		}
	}
	
}
?>