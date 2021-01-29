<?php

$file_name = 'test.txt';
$random_name = rand(10000,99999);
$renameTo = 'renamedFile.txt';
if (rename($file_name, $renameTo)) {
	echo 'File renamed to '.$renameTo;
} else {
	echo 'File cannot be renamed';
}

?>