<?php


$food = array(
	'Healthy' => array('Salad', 'vegetables', 'Pasta'),
	'Unhealthy' => array('Pizza', 'Ice cream')
);

foreach ($food as $key => $value) {
	echo "<b>".$key."</b><br>";
	foreach ($value as $item) {
		echo $item."<br>";
	}
}


?>