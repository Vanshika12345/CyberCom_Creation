<?php
	$a = 1;
	$b = 2;
	$c = 3;

	if(
		$a > $b 
		&& $a > $c
	) {
		echo "$a is greater<br>";
	}else if(
		$b > $a 
		&& $b > $c 
	) {
		echo "$b is greater<br>";
	}else{

		echo "$c is greater<br>";
	}

	if (
		$a == 3 
		|| $a == 1
	) {
		echo "Inside If<br>";
	}else{
		
		echo "Inside Else<br>";
	}
?>