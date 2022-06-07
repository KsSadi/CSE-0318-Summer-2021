<?php
$location = APP_URL;
// Check if already logged in
if( is_logged_in() ) header("Location: $location");

// First check, if the user is already registered or not
if(isset($_POST['submit'])){
	$admission_roll = htmlspecialchars($_POST['admission_roll']);
	$sql = "SELECT admission_roll FROM students WHERE admission_roll='$admission_roll' LIMIT 1";
	$query = mysqli_query($conn, $sql);
	if(mysqli_num_rows($query) == 1){
		$message = '<div class="alert alert-danger" role="alert">You have already registered</div>';
		return;
	}
}


$error['institute_hsc'] = true;
$error['name_en'] = true;
$error['gender'] = true;
$error['mail'] = true;
$error['name_f'] = true;
$error['name_m'] = true;
$error['name_g'] = true;
$error['relation_g'] = true;
$error['mobile'] = true;
$error['mobile_g'] = true;
$error['village'] = true;
$error['upazilla'] = true;
$error['district'] = true;
$error['post_office'] = true;
$error['present_house'] = true;
$error['present_road'] = true;
$error['present_area'] = true;
$error['present_city'] = true;
$error['occuption_f'] = true;
$error['birthdate'] = true;
$error['religion'] = true;
$error['nationality'] = true;
$error['dept_s'] = true;
$error['occuption_m'] = true;
$error['batch'] = true;

$error['ssc_board'] = true;
$error['ssc_year'] = true;
$error['ssc_roll'] = true;
$error['ssc_grade'] = true;
$error['ssc_gpa'] = true;
$error['hsc_board'] = true;
$error['hsc_year'] = true;
$error['hsc_roll'] = true;
$error['hsc_grade'] = true;
$error['hsc_gpa'] = true;

$error['admission_roll'] = true;
$error['admission_year'] = true;
$error['blood'] = true;
$error['institute_ssc'] = true;

$error['password'] = true;
$error['password2'] = true;



if(isset($_POST['submit'])){

	$error['institute_hsc'] = form_check('institute_hsc', $_POST['institute_hsc']);
	$error['name_en'] = form_check('name_en', $_POST['name_en']);
	$error['gender'] = form_check('gender', $_POST['gender']);
	$error['mail'] = form_check('mail', $_POST['mail']);
	$error['name_f'] = form_check('name_f', $_POST['name_f']);
	$error['name_m'] = form_check('name_m', $_POST['name_m']);
	$error['name_g'] = form_check('name_g', $_POST['name_g']);
	$error['relation_g'] = form_check('relation_g', $_POST['relation_g']);
	$error['mobile'] = form_check('mobile', $_POST['mobile']);
	$error['mobile_g'] = form_check('mobile_g', $_POST['mobile_g']);
	$error['village'] = form_check('village', $_POST['village']);
	$error['upazilla'] = form_check('upazilla', $_POST['upazilla']);
	$error['district'] = form_check('district', $_POST['district']);
	$error['post_office'] = form_check('post_office', $_POST['post_office']);
	$error['present_house'] = form_check('present_house', $_POST['present_house']);
	$error['present_road'] = form_check('present_road', $_POST['present_road']);
	$error['present_area'] = form_check('present_area', $_POST['present_area']);
	$error['present_city'] = form_check('present_city', $_POST['present_city']);
	$error['occuption_f'] = form_check('occuption_f', $_POST['occuption_f']);
	$error['birthdate'] = form_check('birthdate', $_POST['birthdate']);
	$error['religion'] = form_check('religion', $_POST['religion']);
	$error['nationality'] = form_check('nationality', $_POST['nationality']);
	$error['dept_s'] = form_check('dept_s', $_POST['dept_s']);
	$error['occuption_m'] = form_check('occuption_m', $_POST['occuption_m']);
	$error['batch'] = form_check('batch', $_POST['batch']);
	
	$error['ssc_board'] = form_check('ssc_board', $_POST['ssc_board']);
	$error['ssc_year'] = form_check('ssc_year', $_POST['ssc_year']);
	$error['ssc_roll'] = form_check('ssc_roll', $_POST['ssc_roll']);
	$error['ssc_grade'] = form_check('ssc_grade', $_POST['ssc_grade']);
	$error['ssc_gpa'] = form_check('ssc_gpa', $_POST['ssc_gpa']);
	
	$error['hsc_board'] = form_check('hsc_board', $_POST['hsc_board']);
	$error['hsc_year'] = form_check('hsc_year', $_POST['hsc_year']);
	$error['hsc_roll'] = form_check('hsc_roll', $_POST['hsc_roll']);
	$error['hsc_grade'] = form_check('hsc_grade', $_POST['hsc_grade']);
	$error['hsc_gpa'] = form_check('hsc_gpa', $_POST['hsc_gpa']);
	
	$error['admission_year'] = form_check('admission_year', $_POST['admission_year']);
	$error['admission_roll'] = form_check('admission_roll', $_POST['admission_roll']);
	$error['blood'] = form_check('blood', $_POST['blood']);
	$error['institute_ssc'] = form_check('institute_ssc', $_POST['institute_ssc']);
	$error['password'] = form_check('password', $_POST['password']);
	
	if($_POST['password'] != $_POST['password2']) $error['password2'] = false;
	
	// Initial check finished.
	//echo array_search(false, $error);
	if(!in_array(false, $error)){ // There is no error

		$institute_hsc = htmlspecialchars($_POST['institute_hsc']);
		$name_en = htmlspecialchars($_POST['name_en']);
		$gender = htmlspecialchars($_POST['gender']);
		$mail = htmlspecialchars($_POST['mail']);
		$name_f = htmlspecialchars($_POST['name_f']);
		$name_m = htmlspecialchars($_POST['name_m']);
		$name_g = htmlspecialchars($_POST['name_g']);
		$relation_g = htmlspecialchars($_POST['relation_g']);
		$mobile_no = htmlspecialchars($_POST['mobile']);
		$mobile_g = htmlspecialchars($_POST['mobile_g']);
		$address_village = htmlspecialchars($_POST['village']);
		$address_upazilla = htmlspecialchars($_POST['upazilla']);
		$address_district = htmlspecialchars($_POST['district']);
		$address_postoffice = htmlspecialchars($_POST['post_office']);
		$present_house = htmlspecialchars($_POST['present_house']);
		$present_road = htmlspecialchars($_POST['present_road']);
		$present_area = htmlspecialchars($_POST['present_area']);
		$present_city = htmlspecialchars($_POST['present_city']);
		$occuption_f = htmlspecialchars($_POST['occuption_f']);
		$birthdate = strtotime(htmlspecialchars($_POST['birthdate']));
		$religion = htmlspecialchars($_POST['religion']);
		$nationality = htmlspecialchars($_POST['nationality']);
		$dept_s = htmlspecialchars($_POST['dept_s']);
		$occuption_m = htmlspecialchars($_POST['occuption_m']);
		$batch = htmlspecialchars($_POST['batch']);
		$ssc_board = htmlspecialchars($_POST['ssc_board']);
		$ssc_year = htmlspecialchars($_POST['ssc_year']);
		$ssc_roll = htmlspecialchars($_POST['ssc_roll']);
		$ssc_grade = htmlspecialchars($_POST['ssc_grade']);
		$ssc_gpa = htmlspecialchars($_POST['ssc_gpa']);
		$hsc_board = htmlspecialchars($_POST['hsc_board']);
		$hsc_year = htmlspecialchars($_POST['hsc_year']);
		$hsc_roll = htmlspecialchars($_POST['hsc_roll']);
		$hsc_grade = htmlspecialchars($_POST['hsc_grade']);
		$hsc_gpa = htmlspecialchars($_POST['hsc_gpa']);
		$admission_year = htmlspecialchars($_POST['admission_year']);
		$admission_roll = htmlspecialchars($_POST['admission_roll']);
		$blood = htmlspecialchars($_POST['blood']);
		$institute_ssc = htmlspecialchars($_POST['institute_ssc']);
		$password = md5(htmlspecialchars($_POST['password']));
		$picture = 'assets/uploads/default.jpg';
	
	
	
		$sql = "INSERT INTO students (
				admission_roll,
				admission_year,
				blood,
				institute_ssc,
				institute_hsc,
				name_en,
				gender,
				mail,
				name_f,
				name_m,
				name_g,
				relation_g,
				mobile_g,
				mobile_no,
				birthdate,
			
				address_village,
				address_postoffice,
				present_house,
				present_road,
				present_area,
				present_city,
				address_upazilla,
				address_district,
				nationality,
				dept_s,
				religion,
				occuption_m,
				batch,
				occuption_f,
				ssc_year,
				ssc_board,
				ssc_roll,
				ssc_grade,
				ssc_gpa,
				hsc_year,
				hsc_board,
				hsc_roll,
				hsc_grade,
				hsc_gpa,
				password,
				picture
				
				) VALUES (
				
				'$admission_roll',
				'$admission_year',
				'$blood',
				'$institute_ssc',
				'$institute_hsc',
				'$name_en',
				'$gender',
				'$mail',
				'$name_f',
				'$name_m',
				'$name_g',
				'$relation_g',
				'$mobile_g',
				'$mobile_no',
				'$birthdate',
				
				'$address_village',
				'$address_postoffice',
				'$present_house',
				'$present_road',
				'$present_area',
				'$present_city',
				'$address_upazilla',
				'$address_district',
				'$nationality',
				'$dept_s',
				'$religion',
				'$occuption_m',
				'$batch',
				'$occuption_f',
				'$ssc_year',
				'$ssc_board',
				'$ssc_roll',
				'$ssc_grade',
				'$ssc_gpa',
				'$hsc_year',
				'$hsc_board',
				'$hsc_roll',
				'$hsc_grade',
				'$hsc_gpa',
				'$password',
				'$picture'
				)
				";
		
		if(mysqli_query($conn, $sql)){
			$message = '<div class="alert alert-success" role="alert">Registration completed. Log in now.</div>';
			foreach ($_POST as &$value) {
				$value = '';
			}
		}
		else{
			$message = '<div class="alert alert-danger" role="alert">Registration is not complete. Please try again</div>'.mysqli_error($conn); //
		}
	}
}
?>