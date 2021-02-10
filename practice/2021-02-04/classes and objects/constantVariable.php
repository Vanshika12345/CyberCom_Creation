<?php
//const variable

class Circle {
	const pi = 3.14;
	function area($radius) {
		return self::pi * ($radius * $radius);
	}

}
echo '<br><br><br>Area of Circle:<br>';
$c = new Circle;
echo $c->area(5);
$circle = new Circle;
echo $circle->area(10);
//to display value of pi
//echo Circle::pi; 
?>