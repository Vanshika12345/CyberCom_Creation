<?php

/**
* Indexed Arrays
**/

//creating array using array function
$food = array(
	'Pasta', 
	'Pizza', 
	'Salad', 
	'Mexican'
);

//creating array using indexes
$array2[0] = 20;
$array2[1] = 21;

//printing the values of array2
echo "Elements of array2 : ";
print_r($array2);
echo "<br>";

//Pizza
echo 'Element of food array at index 1 is '.$food[1]."<br>"; 
//Elements with their index
print_r($food);

//getting length of an array
$length = count($food);

//looping through the length of any array and printing it's element
for($i = 0;$i < $length;$i++){

	echo 'Element at index'.$i.' is '.$food[$i]."<br>"; 	
}


?>