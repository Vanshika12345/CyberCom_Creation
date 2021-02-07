<?php

$age = 16;

try{
	if ($age > 18) {
		echo 'You are allowed';
	} else {
		throw new Exception("You are not allowed", 1);
	}
} catch (Exception $ex) {
	echo 'Error : '.$ex->getMessage();
}





?>