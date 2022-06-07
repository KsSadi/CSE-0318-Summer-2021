<?php

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username != $admin['username'] || $password != $admin['password']){
		$message = callout('', 'Password or username is incorrect', 'danger', false);
		return;
	}
	
	if(isset($_POST['remember'])) $time = 24*3600*30; else $time = 24*8400;
	
	$cookie = base64_encode ($admin['username'].":" . md5(md5 ($admin['password'])));
	setcookie ('d59v_b', $cookie, time()+ $time, "/");
	header("Location: $admin_url");
}


?>