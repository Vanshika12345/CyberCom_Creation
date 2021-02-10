<?php

$data_array = [' Piyush',' Foram'];

$file_name = 'file1.txt';
$file = fopen($file_name, 'a');

//converts the array to a string
$add_data = implode(" ", $data_array);

//added that string to the file
fwrite($file, $add_data);
fclose($file);
?>