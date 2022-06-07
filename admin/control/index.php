<?php

$sql = "SELECT id FROM honours_application WHERE status=0";
$query = mysqli_query($conn, $sql);
$count['honours_application'] = mysqli_num_rows($query);

$sql = "SELECT id FROM masters_application WHERE status=0";
$query = mysqli_query($conn, $sql);

$sql = "SELECT id FROM students";
$query = mysqli_query($conn, $sql);
$count['students'] = mysqli_num_rows($query);

$sql = "SELECT id FROM public_notice";
$query = mysqli_query($conn, $sql);
$count['public_notice'] = mysqli_num_rows($query);
?>