<?php

	

	function addition($a,$b){
		$c = $a + $b;
		return $c;
	}
	function sub($x,$y){
		$z = $x - $y;
		return $z;
	}

	echo " Calling add function<br> ";
	$add = addition(10,12);
	echo " Addition of 10 and 20 is ".$add."<br>";
	
	echo " Calling sub function<br>  ";
	$sub = sub(20,10);
	echo " Substraction of 20 and 10 is ".$sub."<br>";
	
	
	function add($a,$b){
		$c = $a + $b;
		return $c;
	}		
	function divide($a,$b){
		$c = $a / $b;
		return $c;
	}

$value = divide(add(10,20),add(30,30));
echo "((10 + 20) / (30 + 30)) :";
echo $value;

?>