<?php

$conn = mysqli_connect('localhost','root','','user_db');
if (isset($_POST['insert'])) {
	$insert = $_POST['insert'];
}
if (!empty($insert)) {
	if ($conn) {

		$query = "insert into `names`(name) values('".mysqli_real_escape_string($conn, $insert)."')";
		if (mysqli_query($conn,$query)) {
			echo 'Inserted';
		}
	}
} else {
	echo 'Please enter something';
}

?>