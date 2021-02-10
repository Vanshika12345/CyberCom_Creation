<!DOCTYPE html>
<html>
<head>
	<title>User form 4</title>
	<link rel="stylesheet" type="text/css" href="q4_user_form.css">
</head>
<body>
	<form action = "<?php echo $_SERVER['PHP_SELF'] ;?>" method="post">
			<div class="header">CONTACT US</div>
			<div class="box">
				<div><input type="text" name="name" id="name" placeholder="Name..."><span class="error">*<br><label id="nameErr"></label></span></div>
				<div><input type="text" name="email" id="email" placeholder="Email...">
				<span class="error">*<br><label id="emailErr"></label></span></div>
				<div><input type="text" name="subject" id="subject" placeholder="Subject...">
				<span class="error">*<br><label id="subjectErr"></label></span></div>
				<div><textarea class="textarea"type="text" name="message" id="message" placeholder="Message..."></textarea>
					<span class="error">*<br><label id="messageErr"></label></span></div>
		
			</div>	
			<div><button class="btn-send" name="send" id="send" onclick="return validate()">SEND MESSAGE</button></div>
		
			
	
	
	</form>
	<script type="text/javascript" src="q4_user_form_validation.js"></script>


<?php
	require 'connection.php';
	
	if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$atpos = $email.indexOf("@");
    	$dotpos = $email.lastIndexOf(".");
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		if ($name !== '' && ($email !== '' && !($atpos < 1 || ( $dotpos - $atpos < 2 ))) && $subject !== '' && $message !== '') {
			if ($conn) {
	 		$query = "insert into user_form_four(name,email,subject,message) values('$name','$email','$subject','$message')";
	 		if(mysqli_query($conn,$query)){
	 				echo 'Data Added';
	 		} else {
	 			echo 'Could not connect';
	 		}
	 	}
		} else {
			echo '<p>No empty values allowed';
		}
	} else{
		echo '<div>Please enter values</div>';
	}

/*echo '<div><p>Message :'.$message.' with Subject '.$subject.' sent to '.$email.' from :'.$name.'</p></div>';*/
?>	
</body>
</html>