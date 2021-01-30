<?php

//25,50,1000
if (isset($_POST['contact_name']) && isset($_POST['contactemail']) && isset($_POST['message'])) {
		$contact_name = $_POST['contact_name'];
		$email = $_POST['contactemail'];
		$message = $_POST['message'];

		if (!empty($contact_name) && !empty($email) && !empty($message)) {
			if (strlen($contact_name) > 25 || strlen($email) > 50 || strlen($message) > 1000) {
				echo 'Sorry, you exceeded the length';
			} else{
			$sendTo = 'vanshikaagarwal544@gmail.com';
$subject = 'Contact Form submitted';
$body = $contact_name."\n".$message;
$header = 'From: '.$email;

			if (@mail($sendTo, $subject, $body,$header)) {
					echo "Thanks for contacting us";
			} else {
				echo 'Something went wrong';
			}
		}} else {
			echo 'Fill all the fields';
		}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = 'POST'>
		Name :<input type="text" name="contact_name"><br><br>
		Email :<input type="text" name="contactemail"><br><br>
		Message :<textarea name="message" rows="5" cols="20"></textarea><br><br>
		<input type="submit" name="submit">
	</form>

</body>
</html>
