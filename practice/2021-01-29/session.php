<?php
//session are stored on server so client can't see 
session_start();
if (isset($_POST['submit'])) {
	if (isset($_POST['userName']) && isset($_POST['userPassword'])) {
		if (!empty($_POST['userName']) && !empty($_POST['userPassword'])) {
			if (isset($_SESSION['user'])) {
				echo 'Welcome, '.$_SESSION['user'];
			} else{
				echo "Please Login";
		}
		
	}
}
}
elseif (isset($_POST['clear'])) {
	unset($_SESSION['user']);
//destroys the session for a specific user
	session_destroy();
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Session Variable</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = 'post'>
		Name : <input type="text" name="userName"><br><br>
		Password : <input type="password" name="userPassword"><br><br>
		<input type="submit" name="submit"><br><br>
		<input type="submit" name="clear" value="Clear">
	</form>
</body>
</html>