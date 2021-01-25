<?php

$string = 'This is a string';

if(preg_match('/is/',$string)){

	echo "Match Found!<br>";
}else{
	echo "No match Found<br>";
}

$a = "This string contains number2";

if(preg_match('/ /', $a)){
	echo "Space is present<br>";
}else{
	echo "Space is not present<br>";
}
