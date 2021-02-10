<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
require 'connection.php';
require 'core.php';

if (!loggedIn()) {

if (
isset($_POST['username']) &&
isset($_POST['password']) &&
isset($_POST['confirmp']) &&
isset($_POST['firstname']) &&
isset($_POST['lastname'])
) {
$username = $_POST['username'];
$password = $_POST['password'];
$confirmp = $_POST['confirmp'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
if (!empty($username) && !empty($password) && !empty($confirmp) && !empty($firstname) && !empty($lastname)) {
	
	if ($password != $confirmp) {
		echo "Passwords don't match";
	} else {
		$query = "select `user_name` from user_login_details where `user_name` = '$username'";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result)==1) {
			echo $username.'Already Register';
		} else {
			$hashPassword = md5($password);
			$query2 = "insert into `user_login_details`(user_name, user_password, firstname, lastname)  values('".$username."','".$hashPassword."','".$firstname."','".$lastname."')";
			if (mysqli_query($conn, $query2)) {
				echo 'Data Inserted';
			} else {
				echo "Didn't got inserted";
			}
		}
	}
} else {
	echo 'Please fill all the fields';
}
}
	

?>


<form action='register.php' method ='POST'>
	Username: <input type="text" name="username"><br><br>
	Password: <input type="password" name="password"><br><br>
	Password again: <input type="password" name="confirmp"><br><br>
	Firstname: <input type="text" name="firstname" ><br><br>
	Lastname: <input type="text" name="lastname" ><br><br>
	<input type="submit" name="submit" value="Register">

</form>

<?php

} else if (loggedIn()) {
	echo "You are already logged in";
}
?>
</body>
</html>