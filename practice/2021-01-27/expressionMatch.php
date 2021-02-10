<?php

function hasSpace($string){
	if (preg_match('/ /', $string)){
		return true;
	}else{
		return false;
	}
}

$string = 'This a string';
$string2 = 'Thisisastring';

if(hasSpace($string2)){
	echo 'Has space';
}else{
	echo 'No space';
} 
?>