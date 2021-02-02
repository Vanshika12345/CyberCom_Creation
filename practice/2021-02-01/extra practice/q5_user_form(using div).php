<!DOCTYPE html>
<html>
<head>
	<title>User form 5</title>
	<link rel="stylesheet" type="text/css" href="q5_user_form(using div).css">
</head>
<body>
	<form action = "<?php echo $_SERVER['PHP_SELF'] ;?>" method="post">
		<div class="header">Sign In</div>
		<div class ='form'>
		<div>E-mail address </div>
		<div><input type="text" class = 'txt' name="email" id="email" placeholder="mail@address.com"><span class="error">*<br><label id="emailErr"></label></span></div>
		<div>Password</div>
		<div><input type="password" class = 'txt' name="password" id="password"><span class="error">*<br><label id="passwordErr"></label></span></div>

		<div><input type="submit" class="btn-submit" name="submit" value='Sign in' id="submit" onclick="return validate()"></div>
		</div>
	
</form>
	<script type="text/javascript" src="q5_user_form_validation.js"></script>

<?php

	if (isset($_POST['email']) && isset($_POST['password'])) {
		$email = $_POST['email'];

		echo '<br>You successfully signed in with '.$email;
	} else {
		echo '<br>Please fill all the fields';
	}


?>	
</body>
</html>