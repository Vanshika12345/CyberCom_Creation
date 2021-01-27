<?php
	$a = 1;
	$b = 2;
	$c = 3;

	if($a > $b && $a > $c){

		echo "$a is greater<br>";

	}elseif($b > $a && $b > $c ){

		echo "$b is greater<br>";

	}else{

		echo "$c is greater<br>";
		
	}

	if ($a == 3) {

		echo "a is 3<br>";

	}elseif ($a == 1) {

		echo "a is 1<br>";

	}else{

		echo "a is undefined<br>";

	}
?>