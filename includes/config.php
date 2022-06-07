<?php
/**
 * Edit this part as necessary
 */

$db['server'] 	= 'localhost';
$db['username'] = 'root';
$db['password'] = '';
$db['db'] 	= 'sub';


$app['name'] = 'SUB Students Portal';
$app['url']  = 'http://localhost/sub/'; // (with trailing slash) App installation url. App will be accessible through this url
$app['footer_text'] = '&copy 2021 '.$app['name'];


/*
 * Admin user name and password.
 */

$admin['username'] = 'admin';
$admin['password'] = 'password';


/**
 * Do not edit (or edit with caution)
 */

$conn = mysqli_connect($db['server'], $db['username'], $db['password'], $db['db']);
if(!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
mysqli_set_charset($conn, 'utf8');  

define('APP_URL', $app['url']);
define('APP_NAME', $app['name']);


?>