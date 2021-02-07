<?php

class DatabaseConnect {
	
	function __construct($host, $name, $pass){
		if (!@$this->connect($host, $name, $pass)) {
				echo 'Connection failed..!';	
			} else if ($this->connect($host, $name, $pass)){
				echo 'Connected to '.$host;
			}	
	}

	function connect($host, $name, $pass) {
		if (mysqli_connect($host,$name,$pass)) {
			return true;
		} else {
			return false;
		}
	}
}

$connection = new DatabaseConnect('localhost','root','');
?>