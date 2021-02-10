<?php

$userName = 'root';
$password = '';
$hostName = 'localhost';
$db_name = 'user_db';

class ServerException extends Exception{
	public function specificMessage(){
		return 'Error shown on line '.$this->getLine().' in '.$this->getFile();
	}
}

try{
	if (!@mysqli_connect($hostName, $userName, $password, $db_name)) {
		throw new ServerException();	
	} else {
		echo 'Connected';
	}
} catch (ServerException $se) {
	echo 'Error : '.$se->specificMessage();
}

?>