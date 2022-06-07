<?php
$location = APP_URL.'login/';
// Check if user is logged in
if( !is_logged_in() ) header("Location: $location");

if(isset($_POST['submit'])){
	
	$target_dir = "assets/uploads/";
	$file_name = time().'_'. basename($_FILES["picture"]["name"]);
	$target_file = $target_dir.$file_name;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
	// Check any file was selected
	if($_FILES["picture"]["name"] == ''){
		$message = '<div class="alert alert-danger" role="alert">You did not select any picture.</div>';
		return;
	}
	
	// Check if image file is a actual image or fake image
	$check = getimagesize($_FILES["picture"]["tmp_name"]);
	if($check === false) {
		$message = '<div class="alert alert-danger" role="alert">Upload a JPG image file.</div>';
		return;
	}
	
	// Check file size
	if ($_FILES["picture"]["size"] > 200000) {
		$message = '<div class="alert alert-danger" role="alert">File is larger than 200Kb.</div>';
		return;
	}
	// Allow certain file formats
	if($imageFileType != "jpg") {
		$message = '<div class="alert alert-danger" role="alert">Sorry, only JPG files are allowed.</div>';
		return;
	}

	// Allow certain dimension
	$dimension = getimagesize($_FILES["picture"]["tmp_name"]);
	if($dimension[0] != 300 && $dimension[0] != 300){
		$message = '<div class="alert alert-danger" role="alert">Image must be 300x300 in dimension.</div>';
		return;
	}

	if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
		
		
		// Updateing database
		$admission_roll = current_user();
		$sql = "UPDATE students SET picture ='$target_file' WHERE admission_roll='$admission_roll'";
		if(mysqli_query($conn, $sql) === true) $message = "<div class=\"alert alert-success\" role=\"alert\">Your picture has been uploaded.</div>";
		else $message = '<div class="alert alert-danger" role="alert">Sorry, there was an error uploading your file.</div>';	
	}
	else $message = '<div class="alert alert-danger" role="alert">Sorry, there was an error uploading your file.</div>';
}
?>