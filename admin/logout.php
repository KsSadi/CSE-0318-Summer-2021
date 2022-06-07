<?php
include('parts/header.php');
if(isset($_COOKIE['d59v_b'])) setcookie('d59v_b', null, -1, "/");

header("Location: $login_url");
?>