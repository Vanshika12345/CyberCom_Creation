<?php

$file = 'test.txt';

//@ for avoiding warning
if (@unlink($file)) { 
	echo 'File successfully deleted.';
} else{
	echo 'File doesn\'t exist';
}


?>