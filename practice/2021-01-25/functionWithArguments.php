<?php

	

	function add($a,$b){
		$c = $a + $b;
		echo " Addition of $a and $b is ".$c."<br>";
	}
	function sub($x,$y){
		$z = $x - $y;
		echo " Substraction of $x and $y is ".$z."<br>";
	}

	echo " Calling add function<br> ";
	add(10,12);
	echo " Calling sub function<br>  ";
	sub(20,10);
	


?>