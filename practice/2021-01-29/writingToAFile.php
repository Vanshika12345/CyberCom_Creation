<?php
//r- reading, w-writing, a-appending

//opening the file in write mode
$file = fopen('file1.txt', 'w');

//writting into the file
//fwrite($file, "This is file 1"."\n");

//writting an array into the file
$names = ['Vanshika','Subhasini','Aniket'];
foreach ($names as $value) {
	fwrite($file, ' '.$value);
}

//closing the file
fclose($file);
echo "Contents added to the file";

?>