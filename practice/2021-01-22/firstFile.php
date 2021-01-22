<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

		echo "Hello From This File","<br>";  //doesn't return value
		$hello = print("Hello"); //returns 1 
		//phpinfo(); //calling a function for php details
		echo $hello."<br>"; //returns Hello1

		//we can use html tags inside echo 
		echo "<b>Welcome</b><br>";
		
		//echo "<input type = "text" name = "name">";
		// because of double quotes it will give parsing error so to avoid this we can use this in two ways:
		//1 writing the value of attributes inside single quotes
		echo "<input type = 'text' name = 'name'> <br>";
		//2 writing the echo statement with double quotes
		echo '<input type = "text" name = "name"><br>';
		//3 using esacpe character
		echo "<input type = \"text\" name = \"name\"><br>";

		 //setting the name value to input text box
		$a = 1;
		$b = 12;
		$c = $a + $b; 
		echo "Sum of ".$a." and ".$b." is ".$c;
		$name = 'Vanshika';

	?>
	
	<form>
		<input type = "text" name = "yourName" value = "<?php echo $name; ?>">	
	</form>
	
</body>
</html>