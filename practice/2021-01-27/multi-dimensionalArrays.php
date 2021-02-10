<?php

//two dimensional arrays
$persons = array(
	array('Vanshika', 21, 18),
	array('Anjali', 22, 21),
	array('Ronak', 22, 28)
);

//printing its elements
print_r($persons);
echo "<br>";

//printing through loop
for ($i=0; $i < 3; $i++) { 
		echo "<br>";
		echo "Name, Age, Birthday : ";
	for ($j=0; $j <3 ; $j++) {
		echo $persons[$i][$j].' ';
		
	}
}


$food = array(
	'Healthy' => array('Salad', 'vegetables', 'Pasta'),
	'Unhealthy' => array('Pizza', 'Ice cream')
);
echo "<br>";
print_r($food);

echo "<br>";
echo $food['Healthy'][0];
?>