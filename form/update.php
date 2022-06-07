<?php
$location = APP_URL.'login/';
// Check if already logged in
if( !is_logged_in() ) header("Location: $location");



$error['gender'] = true;
$error['institute_ssc'] = true;
$error['institute_hsc'] = true;
$error['present_city'] = true;
$error['present_area'] = true;
$error['present_road'] = true;
$error['present_house'] = true;
$error['mobile_g'] = true;
$error['relation_g'] = true;
$error['occuption_f'] = true;
$error['occuption_m'] = true;
$error['dept_s'] = true;
$error['batch'] = true;
$error['mail'] = true;
$error['name_en'] = true;
$error['name_f'] = true;
$error['name_m'] = true;
$error['name_g'] = true;
$error['mobile'] = true;
$error['village'] = true;
$error['upazilla'] = true;
$error['district'] = true;
$error['post_office'] = true;
$error['blood'] = true;
$error['birthdate'] = true;
$error['religion'] = true;
$error['nationality'] = true;


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


if(isset($_POST['submit'])){

	$error['gender'] = form_check('gender', $_POST['gender']);
	$error['institute_ssc'] = form_check('institute_ssc', $_POST['institute_ssc']);
	$error['institute_hsc'] = form_check('institute_hsc', $_POST['institute_hsc']);
	$error['present_city'] = form_check('present_city', $_POST['present_city']);
	$error['present_area'] = form_check('present_area', $_POST['present_area']);
	$error['present_road'] = form_check('present_road', $_POST['present_road']);
	$error['present_house'] = form_check('present_house', $_POST['present_house']);
	$error['mobile_g'] = form_check('mobile_g', $_POST['mobile_g']);
	$error['relation_g'] = form_check('relation_g', $_POST['relation_g']);
	$error['occuption_f'] = form_check('occuption_f', $_POST['occuption_f']);
	$error['occuption_m'] = form_check('occuption_m', $_POST['occuption_m']);
	$error['dept_s'] = form_check('dept_s', $_POST['dept_s']);
	$error['batch'] = form_check('batch', $_POST['batch']);
	$error['mail'] = form_check('mail', $_POST['mail']);
	$error['name_en'] = form_check('name_en', $_POST['name_en']);
	$error['name_f'] = form_check('name_f', $_POST['name_f']);
	$error['name_m'] = form_check('name_m', $_POST['name_m']);
	$error['name_g'] = form_check('name_g', $_POST['name_g']);
	$error['mobile'] = form_check('mobile', $_POST['mobile']);
	$error['village'] = form_check('village', $_POST['village']);
	$error['upazilla'] = form_check('upazilla', $_POST['upazilla']);
	$error['district'] = form_check('district', $_POST['district']);
	$error['post_office'] = form_check('post_office', $_POST['post_office']);
	$error['blood'] = form_check('blood', $_POST['blood']);
	$error['birthdate'] = form_check('birthdate', $_POST['birthdate']);
	$error['religion'] = form_check('religion', $_POST['religion']);
	$error['nationality'] = form_check('nationality', $_POST['nationality']);

	
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

	
	// Initial check finished.
	//echo array_search(false, $error);
	if(!in_array(false, $error)){ // There is no error

		$gender = htmlspecialchars($_POST['gender']);
		$institute_ssc = htmlspecialchars($_POST['institute_ssc']);
		$institute_hsc = htmlspecialchars($_POST['institute_hsc']);
		$present_city = htmlspecialchars($_POST['present_city']);
		$present_area = htmlspecialchars($_POST['present_area']);
		$present_road = htmlspecialchars($_POST['present_road']);
		$present_house = htmlspecialchars($_POST['present_house']);
		$mobile_g = htmlspecialchars($_POST['mobile_g']);
		$relation_g = htmlspecialchars($_POST['relation_g']);
		$occuption_f = htmlspecialchars($_POST['occuption_f']);
		$occuption_m = htmlspecialchars($_POST['occuption_m']);
		$dept_s = htmlspecialchars($_POST['dept_s']);
		$batch = htmlspecialchars($_POST['batch']);
		$mail = htmlspecialchars($_POST['mail']);
		$name_en = htmlspecialchars($_POST['name_en']);
		$name_f = htmlspecialchars($_POST['name_f']);
		$name_m = htmlspecialchars($_POST['name_m']);
		$name_g = htmlspecialchars($_POST['name_g']);
		$mobile_no = htmlspecialchars($_POST['mobile']);
		$address_village = htmlspecialchars($_POST['village']);
		$address_upazilla = htmlspecialchars($_POST['upazilla']);
		$address_district = htmlspecialchars($_POST['district']);
		$address_postoffice = htmlspecialchars($_POST['post_office']);
		$blood = htmlspecialchars($_POST['blood']);
		$birthdate = strtotime(htmlspecialchars($_POST['birthdate']));
		$religion = htmlspecialchars($_POST['religion']);
		$nationality = htmlspecialchars($_POST['nationality']);
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
	

	
	
		$admission_roll = current_user();
		$sql = "UPDATE students SET
				admission_year = '$admission_year',
			
		
				gender = '$gender',
				institute_ssc = '$institute_ssc',
				institute_hsc = '$institute_hsc',
				present_city = '$present_city',
				present_area = '$present_area',
				present_road = '$present_road',
				present_house = '$present_house',
				mobile_g = '$mobile_g',
				relation_g = '$relation_g',
				occuption_f = '$occuption_f',
				occuption_m = '$occuption_m',
				dept_s = '$dept_s',
				batch = '$batch',
				mail = '$mail',
				name_en = '$name_en',
				name_f = '$name_f',
				name_m = '$name_m',
				name_g = '$name_g',
				mobile_no  = '$mobile_no',
				birthdate  = '$birthdate',
				blood = '$blood',
				address_village = '$address_village',
				address_postoffice = '$address_postoffice',
				address_upazilla = '$address_upazilla',
				address_district = '$address_district',
				nationality = '$nationality',
				religion = '$religion',
			
				ssc_year = '$ssc_year',
				ssc_board = '$ssc_board',
				ssc_roll = '$ssc_roll',
				ssc_grade = '$ssc_grade',
				ssc_gpa = '$ssc_gpa',
				hsc_year = '$hsc_year',
				hsc_board = '$hsc_board',
				hsc_roll = '$hsc_roll',
				hsc_grade = '$hsc_grade',
				hsc_gpa = '$hsc_gpa'

				WHERE admission_roll = '$admission_roll'
				";
		
		if(mysqli_query($conn, $sql)){
			$message = '<div class="alert alert-success" role="alert">Profile updated</div>';

		}
		else{
			$message = '<div class="alert alert-danger" role="alert">Profile not updated. Please try again</div>'.mysqli_error($conn); //
		}
	}
}
?>