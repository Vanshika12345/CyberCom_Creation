<?php

$userName = 'vanshika';
$password = '';
$hostName = 'localhost';
$db_name = 'user_db';

class ServerException extends Exception{}

try{
	if (!@mysqli_connect($hostName, $userName, $password, $db_name)) {
		throw new ServerException("Could not connect to server", 1);	
	} else {
		echo 'Connected';
	}
} catch (ServerException $se) {
	echo 'Error : '.$se->getMessage();
}

?>