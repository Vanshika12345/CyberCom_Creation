<?php

$file_name = 'test.txt';

//checks if the file exist or not
if (file_exists($file_name)) {
	echo 'Sorry the file already exists';
} else{
	$file = fopen($file_name, 'w');
	fwrite($file, "Done");
	fclose($file);

}

?>