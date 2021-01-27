<?php

$asso_array = array(
	'Peter' => 26, 
	'Emilie' => 20, 
	'Jackson' => 25
);

//printing the elements of arrays
print_r($asso_array) ;

//looping through the elements of arrays
echo "<br>";
foreach ($asso_array as $key => $value) {
	echo ' Key: '.$key;
	echo ' Value: '.$value;
	echo "<br>";
}


?>