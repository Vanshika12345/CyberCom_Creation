<?php

//function for non-unique counter
function hit_count() {
	$file_name = 'count.txt';
	$handle = fopen($file_name, 'r');

	//redaing the data from the file
	$current_data = fread($handle, filesize($file_name));
	fclose($handle);

	//increementing the value by 1 
	$counter = $current_data + 1;

	$handle = fopen($file_name, 'w');

	//writing to it to the file again
	fwrite($handle, $counter);
	fclose($handle);

}

//function for unique counter
function hit_count2() {
$ip_address = $_SERVER['REMOTE_ADDR'];
	$found = false;
	$file_handle = file('ip.txt');

	foreach ($file_handle as $ip) {
		$ip_single = trim($ip);
		if ($ip_address == $ip_single) {
			$found = true;
			break;
		} else {
			$found = false;
		}
	}

	if ($found == false) {
			$fileName = 'count.txt';
			$file_handle = fopen($fileName, 'r');
			$current_data = fread($file_handle, filesize($fileName));
			fclose($file_handle);

	//increementing the value by 1 
	$counter = $current_data + 1;

	$file_handle = fopen($fileName, 'w');

	//writing to it to the file again
	fwrite($file_handle, $counter);
	fclose($file_handle);

	$handle = fopen('ip.txt','a');
	fwrite($handle, $ip_address."\n");
	fclose($handle);
			
	} else {

		echo 'IP found';		
	}
}
?>