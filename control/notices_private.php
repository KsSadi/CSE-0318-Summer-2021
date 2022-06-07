<?php
// Check user is logged in
$location = APP_URL.'login/';
if(!is_logged_in()) header("Location: $location");
$admission_roll = current_user();
$sql = "SELECT id, title, message, date, is_read FROM private_notice WHERE admission_roll='$admission_roll' ORDER BY date DESC";
$query = mysqli_query($conn, $sql);
?>