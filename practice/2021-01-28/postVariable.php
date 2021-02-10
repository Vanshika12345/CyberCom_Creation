<?php
	if (isset($_POST['submit']) && isset($_POST['day']) && isset($_POST['date']) && isset($_POST['year'])){
		
			$date = $_POST['date'];
			$day = $_POST['day'];
			$year = $_POST['year'];

			if (!empty($date) && !empty($day) && !empty($year)) {
				echo "Date is ".$day.' '.$date.' '.$year;
			
			} else{
				echo 'Please fill all the fields';
			}

		}
	


?>

<!DOCTYPE html>
<html>
<head>
	<title>Post Variable</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<label>Day</label><br>
		<input type="text" name="day"><br>
		<label>Date</label><br>
		<input type="text" name="date"><br>
		<label>Year</label><br>
		<input type="text" name="year"><br><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>