<?php
$ok = true;

// Check ID is provided
if(!isset($_GET['id']) || $_GET['id'] == ''){
	$message = alert('Notice not found','danger', false); //Provide a notice ID
	$ok = false;
	return;
}

// Check ID is valid
$id = (int) $_GET['id'];
$sql = "SELECT * FROM public_notice WHERE id='$id' LIMIT 1";
$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query) == 0){
	$message = alert('Notice not found','danger', false); // Invalid notice id
	$ok = false;
	return;
}

$result = mysqli_fetch_assoc($query);

?>