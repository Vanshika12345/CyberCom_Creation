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

	if ($a != 3) {

		echo "a is 3<br>";
	}elseif ($a != 2) {

		echo "a is 2<br>";
		
	}else{

		echo "a is undefined<br>";
	}


	$a = 11;
	$b = 20;
	
	if($a > $b){
		echo "$a is greater<br>";
	}else{
		echo "$b is greater<br>";
	}

	if($a<>2){
		echo "$a";
	}
?>