<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action = 'stringFunctions.php' method = "get">
		<input type = "text" name = "user_name"><br><br>
		<input type = "submit" name = "Submit">
	</form>



	<?php

$stringName = 'VanShika';
echo "<br><br><br>";
echo "String Functions :<br>";

//converting to lower case
$lower_string = strtolower($stringName);
echo 'Lower case '.$lower_string."<br>";


//converting to upper case
$upper_string = strtoupper($stringName);
echo 'Upper case '.$upper_string;


// string position
echo "<br>";
$stringSent = "This is a string";
echo strpos($stringSent, 'is');
echo "<br>";
$offset = 0;
$find = 'is';
$find_length = strlen($find);

while ($pos = strpos($stringSent, $find,$offset)) {
	
	echo $find."found at".$pos."<br>";
	$offset = $pos + $find_length;
}
echo "<br><br>";

//substring replace : replacing is with a was
$string = "These is a book";
echo "Replacing is with was using substr_replace() : ";
echo substr_replace($string, ' was ', 5,3);


//string replace
echo "<br>";
echo "Replacing book with bookshelf using str_replace() : ";
echo str_replace(' book', ' bookshelf', $string);


//using array
echo "<br>";
echo "Replacing book,is with bookshelf,was using str_replace() : ";
echo str_replace(['is','book'], ['was','bookshelf'], $string);


//checking the input of form and converting to lower case
echo "<br><br>";
if (isset($_GET['user_name']) && !empty(($_GET['user_name']))) {
	$user_name = $_GET['user_name'];
	echo "Name ".strtolower($user_name);
}

?>
</body>
</html>
