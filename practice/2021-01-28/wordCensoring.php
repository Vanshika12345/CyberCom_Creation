<?php
$find = array('vanshika','anjali','ronak');
$replace = array('v******a','a***i','r***k');
if (isset($_POST['user_input']) && !empty($_POST['user_input'])){
	//$usr_input = strtolower($_POST['user_input']);
	$usr_input = $_POST['user_input'];
	
	$user_input = str_ireplace($find, $replace, $usr_input);
	echo $user_input;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Word Censoring</title>
</head>
<body>
	<hr>
	<form action="wordCensoring.php" method="post">
			<textarea name="user_input" rows="6" cols="30"></textarea>
			<br><br>
			<input type="submit" name="Submit">
	</form>
</body>
</html>