<?php
	//require_once and require are almost same
	include 'header.php';  
	//the files is called only once because from above statement it is already included once
	include_once('header.php'); 
	
	//it will display the content more than one time and called more than one time
 	//include 'header.php'; 
	echo 'Included only once';

?>