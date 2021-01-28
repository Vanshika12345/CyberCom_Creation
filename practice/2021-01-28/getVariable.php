<?php
	if (isset($_GET['submit']) && isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])){
		
			$date = $_GET['date'];
			$day = $_GET['day'];
			$year = $_GET['year'];
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
	<title>Get Variable</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
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