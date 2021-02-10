<?php


require 'connection.php';
require 'core.php';

if (loggedIn()) {
	echo 'You\'re are logged in';
	echo "<br><a href = 'logout.php'>Logout</a><br>";
	$name = getField('firstname');
	$lname = getField('lastname');
	echo $name.'  '.$lname;
} else {

	include 'loginForm.php';
}
?>