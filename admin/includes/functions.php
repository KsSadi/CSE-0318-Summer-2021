<?php

function retrieve_value($field){
	if(isset($_POST[$field])) echo $_POST[$field];
}

function form_check($field, $value){
	if(	$field == 'name_bn' || 
		$field == 'name_en' ||
		$field == 'name_f' || 
		$field == 'name_m' || 
		$field == 'name_g' || 
		$field == 'village' ||
		$field == 'upazilla' ||
		$field == 'post_office' ||
		$field == 'district' ||
		$field == 'nationality' ||
		$field == 'religion' ||
		$field == 'community' ||
		$field == 'present_address' ||
		
		$field == 'exam_name' ||
		$field == 'year_date' ||
		$field == 'year_th' ||
		$field == 'semester_th' ||
		$field == 'semester_month' ||
		$field == 'type'||
		
		$field == 'hall_name' ||
		$field == 'honours_roll' ||
		$field == 'honours_result' ||
		$field == 'year_pass' ||
		$field == 'year_semester' ||
		$field == 'course_name' ||
		// ADMIN
		
		// IMPROVEMENT
		$field == 'department' ||
		$field == 'exam_roll' ||
		$field == 'current_year_th' ||
		$field == 'current_semester_th' ||
		$field == 'read_year_th' ||
		$field == 'read_semester_th'
		){
		if(strlen($value) < 1 || strlen($value) > 255) return false;
	}
	if($field == 'mobile'){
		if(strlen($value) < 1 || strlen($value) > 11) return false;
		if(preg_match('/^[0-9]{11}+$/', $value) == 0) return false;
	}	
	if($field == 'birthdate'){
		if(strlen($value) < 1 || strlen($value) > 10) return false;
		if(validateDate($value) == 0) return false;
	}
	if( $field == 'ssc_board' ||
		$field == 'hsc_board' ){
		$boards = array('Dhaka', 'Rajshahi', 'Comilla', 'Jessore', 'Chittagong', 'Barisal', 'Sylhet', 'Madrasa', 'Techinical', 'Dinajpur');
		if(!in_array($value, $boards)) return false;
	}
	if( $field == 'ssc_year' ||
		$field == 'hsc_year' ||
		$field == 'admission_year'){
		if($value < 1970 || $value > date('Y')) return false;
	}
	if( $field == 'ssc_roll' ||
		$field == 'hsc_roll' ){
		if(preg_match('/^[0-9]{6}+$/', $value) == 0) return false;
	}
	if( $field == 'ssc_grade' ||
		$field == 'hsc_grade' ){
			
		$grade = strtoupper($value);
		$grades = array('A+', 'A', 'A-', 'B', 'C', 'D');
		if(!in_array($grade, $grades)) return false;
	}
	if( $field == 'ssc_gpa' ||
		$field == 'hsc_gpa' ){
		if(preg_match('/^[0-5]\.\d\d$/', $value) == 0) return false;
	}
	if( $field == 'admission_roll' ||
		$field == 'reg_no' ||
		$field == 'session'){
		if(strlen($value) < 1 || strlen($value) > 10) return false;
	}
	if( $field == 'password'){
		if(strlen($value) < 6 || strlen($value) > 255) return false;
	}
	if($field == 'password_old'){
		global $conn;
		$admission_roll = current_user();
		$sql = "SELECT password FROM students WHERE admission_roll='$admission_roll'";
		$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
		if(md5($value) != $result['password']) return false;
	}
	if($field == 'title'){
		if(strlen($value) < 1 || strlen($value) > 511) return false;
	}
	if($field == 'message'){
		if(strlen($value) < 1 || strlen($value) > 2047) return false;
	}
	// ADMIN
	
	
	return true;
}

function has_error($state)
{
	if($state === false) echo "has-error";
}

function error_message($field, $state)
{
	$message = '';
	if($field == 'name_bn' || 
		$field == 'name_en' ||
		$field == 'name_f' || 
		$field == 'name_m' || 
		$field == 'name_g' || 
		$field == 'village' ||
		$field == 'upazilla' ||
		$field == 'post_office' ||
		$field == 'district' ||
		$field == 'nationality' ||
		$field == 'religion' ||
		$field == 'community' ||
		$field == 'present_address' ||
		
		$field == 'admission_roll' ||
		$field == 'reg_no' ||
		$field == 'session' ||
		
		$field == 'exam_name' ||
		$field == 'year_date' ||
		$field == 'year_th' ||
		$field == 'semester_th' ||
		$field == 'semester_month' ||
		$field == 'type' ||
		
		$field == 'hall_name' ||
		$field == 'honours_roll' ||
		$field == 'honours_result' ||
		$field == 'year_pass' ||
		$field == 'year_semester' ||
		$field == 'course_name' ||
		// ADMIN
		$field == 'title' ||
		$field == 'message' ||
		// IMPROVEMENT
		$field == 'department' ||
		$field == 'exam_roll' ||
		$field == 'current_year_th' ||
		$field == 'current_semester_th' ||
		$field == 'read_year_th' ||
		$field == 'read_semester_th'
		
		) $message = "The field is either empty or too long";
		
	if($field == 'mobile') $message = "Mobile number is either empty or invalid";
	if($field == 'birthdate') $message = "Birthdate is either empty or invalid";
	
	if( $field == 'ssc_board' ||
		$field == 'hsc_board' ) $message = "Select your board";


	if( $field == 'ssc_year' ||
		$field == 'hsc_year' ||
		$field == 'admission_year') $message = "Year is either not specified or invalid";
		
	if( $field == 'ssc_roll' ||
		$field == 'hsc_roll' ) $message = "Roll is either not specified or invalid";
		
	if( $field == 'ssc_grade' ||
		$field == 'hsc_grade' ) $message = "Grade is either not specified or invalid";
		
	if( $field == 'ssc_gpa' ||
		$field == 'hsc_gpa' ) $message = "GPA is either not specified or invalid";
		
	if( $field == 'password') $message = "Password must be at least 6 characters long";
	if( $field == 'password2') $message = "Password did not match";
	if( $field == 'password_old') $message = "Your typed password was wrong.";
	
	if($state === false) echo '<span class="help-block">'.$message.'</span>';
}


function validateDate($date, $format = 'd-m-Y')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
}

function is_logged_in(){
	global $admin;
	if(isset($_COOKIE['d59v_b'])){
		
		global $conn;
		$cookie = base64_decode($_COOKIE['d59v_b']);
		list($username, $password) = explode(':', $cookie);
		
		// check username and password is correct
		
		if($username == $admin['username'] && $password = md5(md5($admin['password']))) return true;
		
	}
	
	return false;
}

function current_user(){
	$cookie = base64_decode($_COOKIE['d59v_a']);
	list($admission_roll, $cookie_password_hashed) = explode(':', $cookie);
	
	return $admission_roll;
}

function get_user_info($fields, $admission_roll){
	global $conn;
	if(empty($fields)){
		$select = "*";
	}
	else{
		$select = implode(', ', $fields);
	}
	
	$sql = "SELECT $select FROM students WHERE admission_roll='$admission_roll' LIMIT 1";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_fetch_assoc($query);
	
	return $result;	
}

function nav_active($file){
	$current = basename($_SERVER['SCRIPT_FILENAME']);
	if($current == $file) echo 'active';
}

function get_value($field, $echo = true){
	global $conn;
	$id = (int) $_GET['id'];
	$sql = "SELECT $field FROM students WHERE id='$id' LIMIT 1";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_fetch_assoc($query);
	
	if($echo) echo $result[$field];
	else return $result[$field];
}



function merged_courses($codes, $titles){
  $result = array();
  $count = count($codes);

  for($x = 0; $x<$count; $x++){
    if(strlen($codes[$x]) > 0 && strlen($titles[$x]) > 0){
      $result[] = array($codes[$x], $titles[$x]);
    }
  }
  return $result;
}


function get_user_info_single($column, $admission_roll){
	global $conn;
	$sql = "SELECT $column FROM students WHERE admission_roll='$admission_roll' LIMIT 1";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_fetch_assoc($query);
	return $result[$column];
}

function echo_selected($p1,$p2){
	if($p1 == $p2) echo "selected";
}

function id_to_roll($id){
	global $conn;
	$sql = "SELECT admission_roll FROM students WHERE id='$id' LIMIT 1";
	$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
	
	return $result['admission_roll'];
}

function appearance_count($course_no, $admission_roll){
	global $conn;
	$count = 0;
	$sql = "SELECT courses FROM improvement_application WHERE admission_roll='$admission_roll' AND status='1'";
	$query = mysqli_query($conn, $sql);
	
	while($result = mysqli_fetch_assoc($query)){
		$courses = json_decode($result['courses']);
		if(!empty($courses)){
			foreach($courses as $course){
				if(strtoupper($course[1]) == strtoupper($course_no)) $count++;
			}
		}
	}
	
	return $count;
} 

function merged_courses_2($semesters, $codes, $titles, $gpas){
  $result = array();
  $count = count($semesters);

  for($x = 0; $x<$count; $x++){
    if(	strlen($semesters[$x]) > 0 &&
		strlen($codes[$x]) > 0 &&
		strlen($titles[$x]) > 0 &&
		strlen($gpas[$x]) > 0 ){
      $result[] = array($semesters[$x], $codes[$x], $titles[$x], $gpas[$x]);
    }
  }
  return $result;
}
?>