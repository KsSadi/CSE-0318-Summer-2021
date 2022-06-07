<?php

$ok = true;
// Check ID is provided
if(!isset($_GET['id']) || $_GET['id']==''){
	$message = callout('Missing student ID','Provide a student ID to get details','danger', false);
	$ok = false;
	return;
}

// Check ID is valid
$id = (int) $_GET['id'];
$sql = "SELECT admission_roll FROM students WHERE id='$id'";
$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query) == 0){
	$message = callout('Student not found','The ID is either invalid or does not exist in the database.', 'danger',false);
	$ok = false;
	return;
}
$result = mysqli_fetch_assoc($query);
$admission_roll = $result['admission_roll'];

$error['name_bn'] = true;
$error['name_en'] = true;
$error['name_f'] = true;
$error['name_m'] = true;
$error['name_g'] = true;
$error['mobile'] = true;
$error['village'] = true;
$error['upazilla'] = true;
$error['district'] = true;
$error['post_office'] = true;
$error['present_address'] = true;
$error['birthdate'] = true;
$error['religion'] = true;
$error['nationality'] = true;
$error['community'] = true;

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
$error['session'] = true;
$error['reg_no'] = true;

if(isset($_POST['submit'])){

	$error['name_bn'] = form_check('name_bn', $_POST['name_bn']);
	$error['name_en'] = form_check('name_en', $_POST['name_en']);
	$error['name_f'] = form_check('name_f', $_POST['name_f']);
	$error['name_m'] = form_check('name_m', $_POST['name_m']);
	$error['name_g'] = form_check('name_g', $_POST['name_g']);
	$error['mobile'] = form_check('mobile', $_POST['mobile']);
	$error['village'] = form_check('village', $_POST['village']);
	$error['upazilla'] = form_check('upazilla', $_POST['upazilla']);
	$error['district'] = form_check('district', $_POST['district']);
	$error['post_office'] = form_check('post_office', $_POST['post_office']);
	$error['present_address'] = form_check('present_address', $_POST['present_address']);
	$error['birthdate'] = form_check('birthdate', $_POST['birthdate']);
	$error['religion'] = form_check('religion', $_POST['religion']);
	$error['nationality'] = form_check('nationality', $_POST['nationality']);
	//$error['community'] = form_check('community', $_POST['community']);
	
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
	$error['session'] = form_check('session', $_POST['session']);
	$error['reg_no'] = form_check('reg_no', $_POST['reg_no']);
	
	// Initial check finished.
	//echo array_search(false, $error);
	if(!in_array(false, $error)){ // There is no error

		$name_bn = htmlspecialchars($_POST['name_bn']);
		$name_en = htmlspecialchars($_POST['name_en']);
		$name_f = htmlspecialchars($_POST['name_f']);
		$name_m = htmlspecialchars($_POST['name_m']);
		$name_g = htmlspecialchars($_POST['name_g']);
		$mobile_no = htmlspecialchars($_POST['mobile']);
		$address_village = htmlspecialchars($_POST['village']);
		$address_upazilla = htmlspecialchars($_POST['upazilla']);
		$address_district = htmlspecialchars($_POST['district']);
		$address_postoffice = htmlspecialchars($_POST['post_office']);
		$address_present = htmlspecialchars($_POST['present_address']);
		$birthdate = strtotime(htmlspecialchars($_POST['birthdate']));
		$religion = htmlspecialchars($_POST['religion']);
		$nationality = htmlspecialchars($_POST['nationality']);
		$community = htmlspecialchars($_POST['community']);
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
		$session = htmlspecialchars($_POST['session']);
		$reg_no = htmlspecialchars($_POST['reg_no']);
	}
	
	if(!in_array(false, $error)){ // There is no error

		$name_bn = htmlspecialchars($_POST['name_bn']);
		$name_en = htmlspecialchars($_POST['name_en']);
		$name_f = htmlspecialchars($_POST['name_f']);
		$name_m = htmlspecialchars($_POST['name_m']);
		$name_g = htmlspecialchars($_POST['name_g']);
		$mobile_no = htmlspecialchars($_POST['mobile']);
		$address_village = htmlspecialchars($_POST['village']);
		$address_upazilla = htmlspecialchars($_POST['upazilla']);
		$address_district = htmlspecialchars($_POST['district']);
		$address_postoffice = htmlspecialchars($_POST['post_office']);
		$address_present = htmlspecialchars($_POST['present_address']);
		$birthdate = strtotime(htmlspecialchars($_POST['birthdate']));
		$religion = htmlspecialchars($_POST['religion']);
		$nationality = htmlspecialchars($_POST['nationality']);
		$community = htmlspecialchars($_POST['community']);
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
		$session = htmlspecialchars($_POST['session']);
		$reg_no = htmlspecialchars($_POST['reg_no']);

	
	
		$admission_roll = current_user();
		$sql = "UPDATE students SET
				admission_year = '$admission_year',
				session = '$session',
				reg_no = '$reg_no',
				name_bn = '$name_bn',
				name_en = '$name_en',
				name_f = '$name_f',
				name_m = '$name_m',
				name_g = '$name_g',
				mobile_no  = '$mobile_no',
				birthdate  = '$birthdate',
				address_present = '$address_present',
				address_village = '$address_village',
				address_postoffice = '$address_postoffice',
				address_upazilla = '$address_upazilla',
				address_district = '$address_district',
				nationality = '$nationality',
				religion = '$religion',
				community = '$community',
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

				WHERE admission_roll = $admission_roll
				";
		
		if(mysqli_query($conn, $sql)){
			$message = callout('Success','Profile was updated.','success', false);
		}
		else{
			$message = callout('Failed','Profile could not be updated. Try again.','danger', false); //mysqli_error($conn)
		}
	}
}

if(isset($_GET['delete'])){
	
	// All private notice
	$sql = "DELETE FROM private_notice WHERE admission_roll='$admission_roll'";
	mysqli_query($conn, $sql);
	// All improvement applications
	$sql = "DELETE FROM improvement_application WHERE admission_roll='$admission_roll'";
	// All honours applications
	$sql = "DELETE FROM honours_application WHERE admission_roll='$admission_roll'";
	mysqli_query($conn, $sql);
	// All masters applications
	$sql = "DELETE FROM masters_application WHERE admission_roll='$admission_roll'";
	mysqli_query($conn, $sql);
	// All reset requests
	$sql = "DELETE FROM reset_requests WHERE admission_roll='$admission_roll'";
	mysqli_query($conn, $sql);
	
	// Finally, student
	$sql = "DELETE FROM students WHERE id='$id'";
	if(mysqli_query($conn, $sql)){
		$message = callout('Success','Profile was deleted successfully.','success', false);
		$ok = false;
		return;
	}
	else{
		$message = callout('Failed','Profile could not be deleted'.mysqli_error($conn),'danger', false);
		$ok = false;
		return;
	}
	
}

?>