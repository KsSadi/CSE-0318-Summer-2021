<?php
include('parts/header.php');
if(isset($_COOKIE['d59v_a'])) setcookie('d59v_a', null, -1, "/");
$location = APP_URL;
header("Location: $location");
?>