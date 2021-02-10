<?php

require_once 'lib/connection.php';
if (isset($_POST['btn-submit'])) {
	if (isset($_POST['email']) &&isset($_POST['password'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		if (!empty($email) && !empty($password)) {
			getUsers($email,$password);
			//$file = 'blog_lists.php';
			//header('Location: '.$file);
		}

	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="block">
	<h3>LOGIN</h3>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<table>
		<tr>
			<td><label>Email</label></td>
			<td><input type="text" name="email" id="email" class="textBox"><br>
				<span class="error">*
				<label id="emailErr" ></label></span></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td><input type="password" name="password" id="password" class="textBox"><br>
				<span class="error">*
				<label id="passwordErr" class="error"></label></span></td>
		</tr>
		<tr><td><input type="submit" name="btn-submit" id="btn-submit" class="btn-submit" value="LOGIN" onclick="return validate()"></td>
			<td><input type="button" name="btn-register" id="btn-register" class="btn-submit" value="REGISTER" onclick="location.href='register_html.php'"></td>
		</tr>

<script type="text/javascript" src="js/loginValidation.js"></script>
</body>
</html>