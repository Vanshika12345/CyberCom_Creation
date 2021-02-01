<!DOCTYPE html>
<html>
<head>
	<title>User Form</title>
	<link rel="stylesheet" type="text/css" href="q1_user_form.css">	
</head>
<body>
	
	<form  action = 'q1_user_display_details.php' method = 'post' enctype ='multipart/form-data'>
	<table border="4px">
		<tr>
			<td colspan="2" class="bgcolor"><h3>User Form</h3></td>
		</tr>
		<tr>
			<td>Enter Name</td>
			<td><input type="text" name="username" id="username" ><br>
				<span><label id="nameErr"></label></span></td>
		</tr>
		<tr>
			<td>Enter Password</td>
			<td><input type="password" name="userpassword" id="userpassword" ><br>
				<span><label id="passwordErr"></label></span></td>
		</tr>
		<tr>
			<td>Enter Address</td>
			<td><textarea rows="4" cols="22" id = 'address' name = 'address'></textarea><br><span><label id="addressErr"></label></span></td>
		</tr>
		<tr>
			<td>Select Game</td>
			<td><input type="checkbox" name="game[]" id="hockey" value="Hockey">Hockey<br>
				<input type="checkbox" name="game[]" id="football" value="Football">Football<br>
				<input type="checkbox" name="game[]" id= "badminton" value="badminton">Badminton<br>
				<input type="checkbox" name="game[]" id="cricket" value="Cricket">Cricket<br>
				<input type="checkbox" name="game[]" id="volleyball" value="Volleyball">Volleyball<br>
			<span><label id="gameErr"></label></span></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><input type="radio" name="gender" value="male" id="male">Male
				<input type="radio" name="gender" value="female" id="female">Female<br>
				<span><label id="genderErr"></label></span>
			</td>
		</tr>
		<tr>
			<td>Select Your Age</td>
			<td><select id = "age" name="age">
				<option value='0to6years'>0-6 years</option>
				<option value='7to12years'>7-12 years</option>
				<option value='13to20years'>13-20 years</option>
				<option value='21to35years'>21-35 years</option>
			</select><br>
			<span><label id="ageErr"></label></span>
		</td>
		</tr>

		<tr>
			<td colspan="2"><input type="file" name="fileupload" id="fileupload">
				<br>
			<span><label id="fileErr"></label></span></td>
		</tr>
		<tr>
			<td colspan="2">
				<button name="reset">Reset</button>
				<input type="submit" name="submit" id ='submit' onclick="return validate()">
				</td>
		</tr>	
	</table>
</form>
<script type="text/javascript" src="q1_user_form_validation.js"></script>
<!--
<?php

	/*if (isset( $_POST['username']) && isset($_POST['userpassword']) && isset($_POST['address']) && isset( $_POST['game']) && isset($_POST['gender']) && isset($_POST['age']) && isset($_FILES['fileupload']['name'])) {
		
		$name = $_POST['username'];
		$password = $_POST['userpassword'];
		$address = $_POST['address'];
		$game = $_POST['game'];
		$count = count($game);
		$gender = $_POST['gender'];
		$age = $_POST['age'];
		$file = $_FILES['fileupload']['name'];
		//
		if($name != '' && $password != '' && $address != ''&& $age != '' && $game != '' && $gender != '' && $file != ''){

			echo 'Your name '.$name;
			echo '<br>Your address'.$address;
			echo '<br>Your favourite games ';
			for($i = 0; $i<$count; $i++) {
				echo $game[$i].', ';
			}
			echo '<br>Your age '.$age;
			echo '<br>File uploaded '.$file;
	}
}*/
?>	-->
</body>
</html>