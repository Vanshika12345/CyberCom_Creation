<?php

	function printString(){
		echo "Inside the function print<br>";
	}

	function add(){
		$a = 10;
		$b = 12;
		$c = $a + $b;
		echo " Addition of $a and $b is ".$c;
	}

	echo " Calling print function<br>  ";
	printString();
	echo " Calling add function<br> ";
	add();


?>