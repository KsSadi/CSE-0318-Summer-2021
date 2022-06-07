<?php
require_once('../includes/config.php');
if(isset($_GET['improvement_form'])){
	if(isset($_POST['admission_roll'])){
		$admission_roll= htmlspecialchars($_POST['admission_roll']);
		$sql = "SELECT name_en, name_bn, name_f, name_m, mobile_no, session, reg_no FROM students WHERE admission_roll='$admission_roll' LIMIT 1";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) == 1){
			$result = mysqli_fetch_assoc($query);
			echo json_encode(array($result), JSON_UNESCAPED_UNICODE );
			exit;
		}
	}
}

echo "failed";


?>