<!DOCTYPE html>
<html>
<head>
	<title>User Form 3</title>
	<link rel="stylesheet" type="text/css" href="q3_user_form.css">
</head>
<body>
	<form action = "<?php echo $_SERVER['PHP_SELF'] ;?>" method="post">
<table>
	<tr>
		<td class="header" colspan="2"><h4>Sign Up</h4></td>
	</tr>
	<tr>
		<td>First Name </td>
		<td><input type="text" name="firstName" id="firstName" placeholder="Enter First Name"><span class="error">*<br><label id="firstNameErr"></label></span></td>
	</tr>
	<tr>
		<td>Last Name </td>
		<td><input type="text" name="lastName" id="lastName"placeholder="Enter Last Name"><span class="error">*<br><label id="lastNameErr"></label></span></td>
	</tr>
	<tr>
		<td>Date of Birth </td>
		<td><select name="month" id="month">
					<option value="month">Month</option>		
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
					<option value="day">Day</option>
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
					<option value="year">Year</option>
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
				<span class="error">*<br><label id="dobErr"></label></span></td>
	</tr>
	<tr>
		<td>Gender </td>
		<td><input type="radio" name="gender" value="male" id="male">Male 
		<input type="radio" name="gender" value="female" id="female">Female<span class="error">*<br><label id="genderErr"></label></span></td>
	</tr>
	<tr>
		<td>Country </td>
		<td><select name="country" id="country">
			<option value="Country">Country</option>
			<option value="India">India</option>
			<option value="Australia">Australia</option>
			<option value="Bahamas">Bahamas</option>
			<option value="Brazil">Brazil</option>
			<option value="Egypt">Egypt</option>
			<option value="France">France</option>
			<option value="Germany">Germany</option>
			<option value="Italy">Italy</option>
			<option value="Maldives">Maldives</option>
		</select><span class="error">*<br><label id="countryErr"></label></span></td>
	</tr>
	<tr>
		<td>E-mail </td>
		<td><input type="text" name="email" id="email" placeholder="Enter E-mail"><span class="error">*<br><label id="emailErr"></label></span></td>
	</tr>
	<tr>
		<td>Phone </td>
		<td><input type="text" name="phone" id="phone" placeholder="Enter Phone"><span class="error">*<br><label id="phoneErr"></label></span></td>
	</tr>
	<tr>
		<td>Password </td>
		<td><input type="password" name="password" id="password"><span class="error">*<br><label id="passwordErr"></label></span></td>
	</tr>
	<tr>
		<td>Confirm Password </td>
		<td><input type="password" name="confirmpassword" id="confirmpassword"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="checkbox" name="accept" id="accept">I Agree to the Terms of use<span class="error">*<br><label id="acceptErr"></label></span></td>
	</tr>
	<tr>
		<td colspan="2"  class="footer"><input type="submit" name="submit" id="submit" class ='btn-submit' onclick="return validate()">
			<button name="cancel" class ='btn-cancel'id="cancel">Cancel</button></td>
	</tr>
</table>
</form>
<script type="text/javascript" src="q3_user_form_validation.js"></script>



<?php

require 'connection.php';
if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['month']) && isset($_POST['day']) && isset($_POST['year']) && isset($_POST['gender']) && isset($_POST['country']) && isset($_POST['email']) &&isset($_POST['phone']) && isset($_POST['password']) && isset($_POST['confirmpassword']) && isset($_POST['accept'])) {
	
	$fname = $_POST['firstName'];
	$lname = $_POST['lastName'];
	$month = $_POST['month'];
	$day = $_POST['day'];
	$year = $_POST['year'];
	$dob = $month.$day.$year;
	$gender = $_POST['gender'];
	$country = $_POST['country'];
	$email = $_POST['email'];
	$atpos = $email.indexOf("@");
    $dotpos = $email.lastIndexOf(".");
	$phone = $_POST['phone'];
	$confirmpassword = $_POST['password'];
	$password = $_POST['confirmpassword'];
	if($fname !== '' && $lname !== '' & $month !== 'month' && $day !== 'day' && $year !== 'year' && $gender !=='' && $country !== '' && ($email !== '' && !($atpos < 1 || ( $dotpos - $atpos < 2 )))&& $phone !== '' && strlen($phone) <=10 && $confirmpassword !== '' && $password !== ''){
	if($password == $confirmpassword){

		if ($conn) {
	 		$query = "insert into user_form_three(fname,lname,password,gender,date_of_birth,email,country,phone) values('$fname','$lname','$password','$gender','$dob','$email','$country','$phone')";
	 		if(mysqli_query($conn,$query)){
	 				echo 'Data Added';
	 		} else {
	 			echo 'Could not connect';
	 		}
	 	}
	} else {
		echo 'Both Password should be same';
	}
} else {
		echo 'No empty values allowed';
	}
} else {
	echo 'Please enter all the fields';
}


		//echo 'Your name '.$fname.' '.$lname;
		//echo '<br> Your date of birth '.$month.' '.$day.' '.$year;
		//echo '<br> Your email '.$email;
		//echo '<br> Your phone no '.$phone;
		//echo '<br> Your gender '.$gender;

?>
</body>
</html>