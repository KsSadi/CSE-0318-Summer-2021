<?php
require_once('../includes/config.php');
require_once('includes/functions.php');
require_once('includes/functions.html.php');
$file = basename($_SERVER['SCRIPT_FILENAME']);

// Login is required for all page access except login.php
$login_url = APP_URL.'admin/login.php';
if($file != 'login.php' && !is_logged_in()) header("Location: $login_url");

// Logged in user cannot log in again
$admin_url = APP_URL.'admin/';
if($file == 'login.php' && is_logged_in()) header("Location: $admin_url");


// Page title and meta description. Edit as necessary




switch($file){
	case 'index.php':
		$title = 'Home | '.APP_NAME.' Dashboard';
		break;
	case 'login.php':
		$title = 'Login | '.APP_NAME.' Dashboard';
		break;
	case 'students.php':
		$title = 'Students | '.APP_NAME.' Dashboard';
		break;
	case 'student.php':
		$title = 'Student Profile | '.APP_NAME.' Dashboard';
		break;
	case 'student_edit.php':
		$title = 'Edit Student Profile | '.APP_NAME.' Dashboard';
		break;
	case 'honours_applications.php':
		$title = 'Honours exam applications | '.APP_NAME.' Dashboard';
		break;
	case 'honours_application.php':
		$title = 'Honours exam application details | '.APP_NAME.' Dashboard';
		break;
	case 'masters_applications.php':
		$title = 'Masters exam applications | '.APP_NAME.' Dashboard';
		break;
	case 'masters_application.php':
		$title = 'Masters exam application details | '.APP_NAME.' Dashboard';
		break;
	case 'private_notices.php':
		$title = 'Private Notices | '.APP_NAME.' Dashboard';
		break;
	case 'public_notices.php':
		$title = 'Public Notices | '.APP_NAME.' Dashboard';
		break;
	case 'add_private_notice.php':
		$title = 'New Private Notice | '.APP_NAME.' Dashboard';
		break;
	case 'add_public_notice.php':
		$title = 'New Public Notice | '.APP_NAME.' Dashboard';
		break;
	case 'add_improvement_application.php':
		$title = 'Add New Improvement Application | '.APP_NAME.' Dashboard';
		break;
	case 'improvement_applications.php':
		$title = 'Improvement Applications | '.APP_NAME.' Dashboard';
		break;
	case 'improvement_application.php':
		$title = 'Improvement Application Details | '.APP_NAME.' Dashboard';
		break;
		
	default:
		$title = 'Home | '.APP_NAME.' Dashboard';
		break;
}




?>