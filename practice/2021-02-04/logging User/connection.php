<?php
$hostname = 'localhost';
$userName = 'root';
$password = '';
$db_name = 'user_db';

$conn = mysqli_connect($hostname, $userName, $password, $db_name);

if (!$conn){
	die('Could not connect');
}



?>