<?php

$directory = 'extra_files';

//will open the directory
if ($handle = opendir($directory.'/')) {
	echo 'You are in <b>\''.$directory.'\'</b>directory:<br>';

//read the content of the directory
	while ($file = readdir($handle)){
		if ($file != '.' && $file != '..') {
			//creating link to the files under the directory
			echo '<a href = "'.$directory.'/'.$file.'">'.$file.'</a><br>';
		}
	}
}

?>