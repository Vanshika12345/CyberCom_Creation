<?php
//vanshikaagarwal544@gmail.com - 12345
//anjalis456@gmail.com-123456
require_once 'lib/connection.php';
//monthname(str_to_date(MonthNum,'%m'))

if (isset($_POST['btn-submit'])) {
	if (isset($_POST['prefix']) &&isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['mobileNumber']) && isset($_POST['password']) && isset($_POST['confirmPassword']) && isset($_POST['information']) && isset($_POST['accept'])) {
		$prefix = $_POST['prefix'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$mobile = $_POST['mobileNumber'];
		$password = $_POST['password'];
		$confirmP = $_POST['confirmPassword'];
		$accept = $_POST['accept'];
		$info = $_POST['information'];
			if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($mobile) && !empty($password) && !empty($confirmP) && !empty($accept) && !empty($info)) {
				if ($password == $confirmP) {
					insertUser($prefix,$firstName,$lastName,$email,$mobile,$password,$info);
					
				}
			}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
	<div class="block">
	<h3>REGISTER</h3>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<table>
		<tr>
		<td><label>Prefix</label></td>
		<td><select name="prefix" id="prefix">
			<option>Ms.</option>
			<option>Mrs.</option>
			<option>Mr.</option>
		</select></td></tr>
		
		<tr>
			<td><label>First Name</label></td>
			<td><input type="text" name="firstName" id="firstName" class="textBox"><br><span class="error">*
				<label id="firstNameErr" ></label></span></td>
		</tr>
		<tr>
			<td><label>Last Name</label></td>
			<td><input type="text" name="lastName" id="lastName" class="textBox"><br><span class="error">*
				<label id="lastNameErr" class="error"></label></span></td>
		</tr>
		<tr>
			<td><label>Email</label></td>
			<td><input type="text" name="email" id="email" class="textBox"><br><span class="error">*
				<label id="emailErr" class="error"></label></span></td>
		</tr>
		<tr>
			<td><label>Mobile Number</label></td>
			<td><input type="text" name="mobileNumber" id="mobileNumber" class="textBox"><br><span class="error">*
				<label id="mobileErr" class="error"></label></span></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td><input type="password" name="password" id="password" class="textBox"><br><span class="error">*
				<label id="passwordErr" class="error"></label></span></td>
		</tr>
		<tr>
			<td><label>Confirm Password</label></td>
			<td><input type="password" name="confirmPassword" id="confirmPassword" class="textBox"><br><span class="error">*
				<label id="confirmPErr" class="error"></label></span></td>
		</tr>
		<tr>
			<td><label>Information</label></td>
			<td><textarea name="information" id="information" rows="3" cols="16" class="textArea"></textarea><br><span class="error">*
				<label id="infoErr" class="error"></label></span></td>
		</tr>
		<tr>
			<td></td>
		<td><input type="checkbox" name="accept" id="accept" class="cb"><label>Hereby, I Accept Terms & Conditions</label><span class="error">*
				<label id="acceptErr" class="error"></label></td>
		</tr>

		<tr><td></td>
			<td><input type="submit" name="btn-submit" id="btn-register" class="btn-submit" onclick="return validate()"></td>
		</tr>
	</table>
	</form>
</div>
<script type="text/javascript" src="js/registerValidations.js"></script>
</body>
</html>