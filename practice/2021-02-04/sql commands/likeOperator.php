<?php

require 'connection.php';

if (isset($_POST['name']) && !empty($_POST['name'])) {
	$name = $_POST['name'];
	$query = "select firstname from user_login_details where firstname like '%".$name."%'";

	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) >= 1) {
		
		while ($qr = mysqli_fetch_array($result)) {
			echo $qr['firstname']."<br>";
		}
	} else {
		echo 'no match';
		}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Like </title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = 'POST'>
		Name <input type="text" name="name">  <input type="submit" name="submit" value="Search">
	</form>
</body>
</html>