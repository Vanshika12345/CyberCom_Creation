<?php

$file_name = 'file1.txt';
$file = fopen($file_name, 'r');

//filesize gives the size of the file
$data = fread($file, filesize($file_name));

//data of file is displayed
echo $data;

//converts the string data of file into array  
$data_array = explode("\n", $data);
echo "<br>";
print_r($data_array);
?>