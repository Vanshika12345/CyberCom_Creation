<?php

//open with 127.0.0.1/filename
$ip_address = $_SERVER['REMOTE_ADDR'];
//$ip_address = getenv('REMOTE_ADDR');

//empty
//$ip_address = $_SERVER['HTTP_CLIENT_IP'];
$blocked_ip = array('127.0.0.1','127.00.11.2');

foreach ($blocked_ip as $ip) {
	if ($ip === $ip_address) {
		die("Your IP address has been blocked");
	}
}

//a better way

//empty 
//$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];


?>
<h2>Welcome</h2>