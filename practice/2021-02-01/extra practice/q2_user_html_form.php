<!DOCTYPE html>
<html>
<head>
	<title>User Form 2</title>
	<link rel="stylesheet" type="text/css" href="q2_user_form.css">
</head>
<body>
	<center><div class = 'mainDiv'>
	<fieldset class="area">
		<legend>USER FORM</legend>
		<form action = "<?php echo $_SERVER['PHP_SELF'] ;?>" method="post">
		<ul>
			<table><tr>
			<td><li>FIRST NAME</li></td>
			<td><input type="text" name="firstname" id="firstname"><span class="error">*<label id="nameErr"></label></span></td></tr>
			<tr><td><li>PASSWORD</li></td>
			<td><input type="password" name="password" id="password"><span class="error">*<label id="passwordErr"></label></span></td></tr>
			<tr><td><li>GENDER</li></td>
			<td><input type="radio" name="gender" id="male" value="male" >Male
			<input type="radio" name="gender" id="female" value="female">Female
			&nbsp;&nbsp;&nbsp;<span class="error">*<label id="genderErr"></label></span></td></tr>
			<tr>
				<td>
					<li>ADDRESS</li>
				</td>
				<td>
					<textarea rows="4" cols="23" class="align" name="address" id="address"></textarea>
				&nbsp;&nbsp;&nbsp;<span class="error">*<label id="addressErr"></label></span></td>
			</tr>
			<tr>
				<td>
					<li>D.O.B</li>
				</td>
				<td>
				<select name="month" id="month">
					<option value='Jan'>Jan</option>
					<option value='Feb'>Feb</option>
					<option value='Mar'>Mar</option>
					<option value='Apr'>Apr</option>
					<option value='May'>May</option>
					<option value='Jun'>Jun</option>
					<option value='Jul'>Jul</option>
					<option value='Aug'>Aug</option>
					<option value='Sept'>Sept</option>
					<option value='Oct'>Oct</option>
					<option value='Nov'>Nov</option>
					<option value='Dec'>Dec</option>
				</select>
				<select name="day" id="day">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
				</select> 
				<select name="year" id="year">
					<option value="1999">1999</option>
					<option value="2000">2000</option>
					<option value="2001">2001</option>
					<option value="2002">2002</option>
					<option value="2003">2003</option>
					<option value="2004">2004</option>
					<option value="2005">2005</option>
					<option value="2006">2006</option>
					<option value="2007">2007</option>
					<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
					<option value="2011">2011</option>
					<option value="2012">2012</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
				</select>&nbsp;&nbsp;&nbsp;
				<span class="error">*<label id="dobErr"></label></span></td>
			</tr>

			<tr>
			<td>
			<li>SELECT GAME</li>
		</td>
			<td class="cb">
			<input type="checkbox" name="game[]" id="hockey" value="Hockey">Hockey
			<input type="checkbox" name="game[]" id="football" value="Football">Football
			<input type="checkbox" name="game[]" id= "badminton" value="badminton">Badminton
			<input type="checkbox" name="game[]" id="cricket" value="Cricket">Cricket<input type="checkbox" name="game[]" id="volleyball" value="Volleyball">Volleyball
			<span class="error">*
				<br><label id="gameErr"></label></span></td>
			</tr>
			<tr><td><li>MARITAL STATUS</li></td>
			<td><input type="radio" name="marital_status" id="married" value="married">Married
			<input type="radio" name="marital_status" id="unmarried" value="unmarried">Unmarried
			<span class="error">*<label id="statusErr"></label></span></td></tr>
		</ul>
		<tr><td></td><td>
		<input type="submit" name="submit" id="submit" onclick="return validate()">
		<button name="reset">Reset</button></td></tr>
		<tr><td></td><td><input type="checkbox" name="accept" id="accept">I accept this agreement &nbsp;&nbsp;&nbsp;<span class="error">*<label id="acceptErr"></label></span></td></tr>
		</table>
		</form>
	</fieldset>
</center>
<script type="text/javascript" src="q2_user_form_validation.js"></script>

<?php
if (isset( $_POST['firstname']) && isset($_POST['password']) && isset($_POST['address']) && isset( $_POST['game']) && isset($_POST['gender']) && isset($_POST['month']) && isset($_POST['year']) && isset($_POST['day']) && isset($_POST['marital_status']) && isset($_POST['accept'])) {
		
		$name = $_POST['firstname'];
		$password = $_POST['password'];
		$address = $_POST['address'];
		$game = $_POST['game'];
		$count = count($game);
		$gender = $_POST['gender'];
		$month = $_POST['month'];
		$day = $_POST['day'];
		$year =$_POST['year'];
		$marital_status = $_POST['marital_status'];
		//
		if($name != '' && $password != '' && $address != ''&& $month != '' && $day !== '' && $year !== '' && $game != '' && $gender != '' && $marital_status != ''){

			echo "Your details : <br>";
			echo 'Your name '.$name;
			echo '<br>Your address '.$address;
			echo '<br>Your favourite games ';
			if ($count > 0) {
			for($i = 0; $i < $count; $i++) {
				echo $game[$i].' ';
			}}
			echo '<br>Your marital_status '.$marital_status;
			echo '<br>Your date of birth '.$month.' '.$day.' '.$year;
	} else {
		echo 'No empty values allowed';
	}
} else {
	echo 'Please enter all the fields';
}


?>
</body>
</html>