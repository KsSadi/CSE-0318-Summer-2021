<?php 

$error['admission_roll'] = true;
$error['title'] = true;
$error['message'] = true;

if(isset($_POST['submit'])){
	$error['admission_roll'] = form_check('admission_roll', $_POST['admission_roll']);
	$error['title'] = form_check('title', $_POST['title']);
	$error['message'] = form_check('message', $_POST['message']);
	
	
	if(!in_array(false, $error)){
		
		// Check admission_roll is present in database
		$admission_roll = htmlspecialchars($_POST['admission_roll']);
		
		$sql = "SELECT name_en FROM students WHERE admission_roll='$admission_roll' LIMIT 1";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) == 0){
			$message = callout('Failed', "Private notice could not be added. No student was found with that admission roll.", 'danger', false);
			return;
		}
		$result = mysqli_fetch_assoc($query);
		$name_en = $result['name_en'];
		
		$title = htmlspecialchars($_POST['title']);
		$message = htmlspecialchars($_POST['message']);
		$date = time();
		$is_read = 0;
		
		$sql = "INSERT INTO private_notice (
			admission_roll,
			title,
			message,
			date,
			is_read
			) VALUES (
			'$admission_roll',
			'$title',
			'$message',
			'$date',
			'$is_read'
			)";
		
		if(mysqli_query($conn, $sql)){
			$message = callout('Success', "A new private notice was added for $name_en ($admission_roll)", 'success', false);
			foreach ($_POST as &$value) {
				$value = '';
			}
		}
		else $message = callout('Failed', "Private notice could not be added. Try again.", 'danger', false);
	}
	
}

?>