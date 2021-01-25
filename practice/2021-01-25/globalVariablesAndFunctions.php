<?php

$var = "Gobal String";

function printString(){
	echo $var; //not able to access the global string : Undefined variable: var

	global $var; //allows to access the global variable
	echo $var;
}

printString();
?>