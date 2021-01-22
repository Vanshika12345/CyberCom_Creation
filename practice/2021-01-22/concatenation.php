<?php
		$a = 1; 
		$b = 12;
		$c = $a + $b; 
		echo "Sum of ".$a." and ".$b." is ".$c."<br>"; //using dot(.)
		echo "With + sum is "+$c."<br>"; //using (+) // returns Warning: A non-numeric value encountered in C:\xampp\htdocs\php_data\practice\2021-01-22\concatenation.php on line 6 and prints the value of c
		echo "With comma sum is ",$c,"<br>";  //using(,)
		echo "Without symbols Sum of $a and $b is $c<br>";		
?>