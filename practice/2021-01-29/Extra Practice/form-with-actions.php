<!DOCTYPE html>
<html>
<head>
	<title>HTML FORM</title>
<style type="text/css">
	.error{
		color: #FF0000;
	}
	.display{
		text-align: center;
		border: 1px solid;
	}
</style>	
</head>
<body>
	<?php
		//defining the variables
		$nameErr = $emailErr = $genderErr = $subjectErr = $websiteErr = '';
		$name = $email = $gender = $class = $course = $subject = '';
		$count = 0;
		if (isset($_SERVER['REQUEST_METHOD']) == 'POST') {
			if (empty($_POST['name'])) {
				$nameErr = 'Name is required';
			} else {
				$name = test_input($_POST['name']);
			}

			if (empty($_POST['email'])) {
				$emailErr = 'Email is required';
			} else {
				$email = test_input($_POST['email']);
				if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
					$emailErr = 'Invalid email format';
				}
			}

			if (empty($_POST['course'])) {
				$course = '';
			} else {
				$course = test_input($_POST['course']);
			}

			if (empty($_POST['class'])) {
				$class = '';
			} else {
				$class = test_input($_POST['class']);
			}

			if (empty($_POST['gender'])) {
				$genderErr = 'Gender is required';
			} else {
				$gender = test_input($_POST['gender']);
			}

			if (empty($_POST['subjects'])) {
				$subjectErr = 'You must select 1 or more subjects';
			} else {
				$subject = $_POST['subjects'];
				$count = count($subject);
			}
		}

		function test_input($value){
			$value = trim($value);
			$value = stripslashes($value);
			$value = htmlspecialchars($value);

			return $value;
		}

	?>
	<center><h3>Classes Registration Form</h3>
	<p><span class="error">* required Fields</span></p>
	<form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = 'POST'>
		<table>
			<tr>
				<td>Name :</td>
				<td><input type="text" name="name">
					<span class="error">*<?php echo $nameErr; ?></span></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="text" name="email">
					<span class="error">*<?php echo $emailErr; ?></span>
				</td>
			</tr>
			<tr>
				<td>Time :</td>
				<td><input type="text" name="course">
					<span class="error">*<?php echo $websiteErr; ?></span>
				</td>
			</tr>
			<tr>
				<td>Classes :</td>
				<td><textarea name="class" rows="5" cols="22"></textarea></td>
			</tr>
			<tr>
				<td>Gender :</td>
				<td><input type="radio" name="gender" value="male">Male
					<input type="radio" name="gender" value="female">Female
					<span class="error">*<?php echo $genderErr; ?></span>
				</td>
			</tr>
			<tr>
				<td>Select :</td>
				<td><select name="subjects[]" multiple>
					<option value="Android">Android</option>
					<option value="Java">Java</option>
					<option value="C#">C#</option>
					<option value="Data Base">Data Base</option>
					<option value="Hadoop">Hadoop</option>
					<option value="VB Script">VB Script</option>
				</select>
					<span class="error"><?php echo $subjectErr; ?></span>
				</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="checked" value="1"></td>
				<?php if (!isset($_POST['checked'])) { ?>
				<span class="error">*<?php echo 'You must agree to Terms and Condtions';?></span>
				<?php }?>
				<td>Agree to Terms and Condtions</td>	
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
	<br><br><br>
		<caption><b>Your Details:</b></caption>
		<table rules="all" class="display">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Class Time</th>
				<th>Class</th>
				<th>Gender</th>
				<th>Name</th>
			</tr>
			<tr>
				<td><?php echo $name; ?></td>
				<td><?php echo $email; ?></td>
				<td><?php echo $course; ?></td>
				<td><?php echo $class; ?></td>
				<td><?php echo $gender; ?></td>
				<td><?php for ($i=0; $i < $count; $i++) { 
			echo $subject[$i].", ";
		} ?></td>
			</tr>
		</table>
	</center>
</body>
</html>
		<!--echo "";
		echo "Your Name is $name <br>";
		echo "Your email is $email <br>";
		echo "Your class time is $course <br>";
		echo "Your class info $class <br>";
		echo "Your gender is $gender <br>";
		echo "Your subjects are:<br>";-->
		
