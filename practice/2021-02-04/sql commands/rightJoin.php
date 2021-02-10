<?php
	require 'connection.php';
	$count = 0;
	$query = "select u.firstname, u.lastname, ud.phoneno from user_login_details u right join user_details ud on u.id = ud.id";
	$result = mysqli_query($conn, $query);

	if ($result) {
		while ($qr = mysqli_fetch_array($result)) {
				$name = $qr['firstname'];
				$lname = $qr['lastname'];
				$phone = $qr['phoneno'];
				//$count = count($qr);
				echo $name.' '.$lname.' '.$phone."<br>";

			}	
	} else {
		echo 'No results found';
	}


?>