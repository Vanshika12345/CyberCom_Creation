<!DOCTYPE html>
<html>
<head>
	<title>User Form 1</title>
	<link rel="stylesheet" type="text/css" href="q1_user_form.css">	
</head>
<body>
	
	<form  action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = 'post' enctype ='multipart/form-data'>
	<table border="4px">
		<tr>
			<td colspan="2" class="bgcolor"><h3>User Form</h3></td>
		</tr>
		<tr>
			<td>Enter Name</td>
			<td><input type="text" name="username" id="username" >
				<span class="error">*<br><label id="nameErr"></label></span></td>
		</tr>
		<tr>
			<td>Enter Password</td>
			<td><input type="password" name="userpassword" id="userpassword" >
				<span class="error">*<br><label id="passwordErr"></label></span></td>
		</tr>
		<tr>
			<td>Enter Address</td>
			<td><textarea rows="4" cols="22" id = 'address' name = 'address'></textarea><span class="error">*<br><label id="addressErr"></label></span></td>
		</tr>
		<tr>
			<td>Select Game</td>
			<td><input type="checkbox" name="game[]" id="hockey" value="Hockey">Hockey<br>
				<input type="checkbox" name="game[]" id="football" value="Football">Football<br>
				<input type="checkbox" name="game[]" id= "badminton" value="badminton">Badminton<br>
				<input type="checkbox" name="game[]" id="cricket" value="Cricket">Cricket<br>
				<input type="checkbox" name="game[]" id="volleyball" value="Volleyball">Volleyball
			<span class="error"><br><label id="gameErr"></label></span></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><input type="radio" name="gender" value="male" id="male">Male
				<input type="radio" name="gender" value="female" id="female">Female
				<span class="error">*<br><label id="genderErr"></label></span>
			</td>
		</tr>
		<tr>
			<td>Select Your Age</td>
			<td><select id = "age" name="age">
				<option value = "" selected disabled>Age</option>
				<?php 
				for($i = 10;$i<40;$i++){
				echo '<option value='.$i.'>'.$i.'</option>';
				}
				?>
				</select>
			<span class="error">*<br><label id="ageErr"></label></span>
		</td>
		</tr>

		<tr>
			<td colspan="2"><input type="file" name="fileupload" id="fileupload">
				
			<span class="error">*<br><label id="fileErr"></label></span></td>
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

<?php
		require 'connection.php';

	if (isset( $_POST['username']) && isset($_POST['userpassword']) && isset($_POST['address']) && isset( $_POST['game']) && isset($_POST['gender']) && isset($_POST['age']) && isset($_FILES['fileupload']['name'])) {
		
		$name = $_POST['username'];
		$password = $_POST['userpassword'];
		$address = $_POST['address'];
		$game = $_POST['game'];
		$count = count($game);
		$games_arr = implode(',', $game);
		$gender = $_POST['gender'];
		$age = $_POST['age'];
		$file = $_FILES['fileupload']['name'];
		//
		if($name != '' && $password != '' && $address != ''&& $age != '' && $game != '' && $gender != '' && $file != ''){
			
		 if ($conn) {
	 		$query = "insert into user_form_one(name,password,address,game,gender,age,file_name) values('$name','$password','$address','$games_arr','$gender','$age','$file')";
	 		if(mysqli_query($conn,$query)){
	 				echo 'Data Added';
	 		} else {
	 			echo 'Could not connect';
	 		}
	 	}		


	} else {
		echo 'No empty values allowed';
	}
} else {
	echo 'Please enter all the fields';
}



/*echo "Your details : <br>";
			echo 'Your name '.$name;
			echo '<br>Your address'.$address;
			echo '<br>Your favourite games ';
			echo '<br>Your age '.$age;
			echo '<br>File uploaded '.$file;
			*/

?>	
</body>
</html>