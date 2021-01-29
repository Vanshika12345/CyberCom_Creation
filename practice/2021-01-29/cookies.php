<?php
	$time = time();
	if (isset($_POST['submit'])) {
		if (isset($_COOKIE['userName'])) {
			echo "Welcome ".$_COOKIE['userName'];
		} elseif (isset($_POST['rememberMe'])) {

			if(!empty($_POST['userName']) && !empty($_POST['userPassword'])){
					
					setcookie('userName',$_POST['userName'],$time + 2000);
					echo 'Cookie stored';
			}
		} else{
			echo 'Cookie not set';
		}
	}
	if (isset($_POST['clear'])) {
		if (isset($_COOKIE['userName'])) {

			setcookie('userName',$_POST['userName'],$time - 2000);
					echo 'Cookie removed';
		}
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Cookie Variable</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = 'post'>
		Name : <input type="text" name="userName"><br><br>
		Password : <input type="password" name="userPassword"><br><br>
		<input type="checkbox" name="rememberMe"> Remember Me<br><br>
		<input type="submit" name="submit"><br><br>
		<input type="submit" name="clear" value="Clear">
	</form>

</body>
</html>