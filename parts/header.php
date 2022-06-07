<?php
require_once('includes/config.php');
require_once('includes/functions.php');



// Page title and meta description. Edit as necessary

$file = basename($_SERVER['SCRIPT_FILENAME']);


switch($file){
	case 'index.php':
		$title = 'Home | '.APP_NAME;
		$description = 'Description for homepage';
		break;
	case 'register.php':
		$title = 'Registration | '.APP_NAME;
		$description = 'Description for registration page';
		break;
	case 'login.php':
		$title = 'Login | '.APP_NAME;
		$description = 'Description for login page';
		break;
	case 'applications.php':
		$title = 'Honours Applications | '.APP_NAME;
		$description = 'Description for Honours Applications page';
		break;
	
	case 'honours.php':
		$title = 'Pre Registration Application From | '.APP_NAME;
		$description = 'Description for Masters Applications page';
		break;
	
	case 'notices.php':
		$title = 'All Notices | '.APP_NAME.' Dashboard';
		break;
	case 'notice.php':
		$title = 'Notice | '.APP_NAME.' Dashboard';
		break;
	case 'form_improvement.php':
		$title = 'Improvement Form | '.APP_NAME.' Dashboard';
		break;
	case 'improvement.php':
		$title = 'Improvement Form | '.APP_NAME.' Dashboard';
		break;
	case 'edit_improvement.php':
		$title = 'Edit Improvement Form | '.APP_NAME.' Dashboard';
		break;
	case 'improvement_list.php':
		$title = 'Improvement List | '.APP_NAME.' Dashboard';
		break;
		
	
	default:
		$title = 'Home | '.APP_NAME;
		$description = 'Description for homepage';
		break;
}




?>