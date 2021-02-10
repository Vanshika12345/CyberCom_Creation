<?php

$string = 'password';

//md5() returns 32bit hash
//$hash_string = md5($string);
//echo $hash_string;

if (isset($_POST['pass']) && !empty($_POST['pass'])) {
	$pass = $_POST['pass'];	
	$hash_password = md5($pass);

	$file = 'hash_string.txt';
	$handle = fopen($file, 'r');
	$data = fread($handle, filesize($file));

	if ($hash_password == $data) {
		echo 'Correct';
	} else {
		echo 'Incorrect';
	}

} else {
	echo "Please enter a password";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		Password : <input type="password" name="pass"><br><br>
		<input type="submit" name="submit">
	
	</form>
</body>
</html>
