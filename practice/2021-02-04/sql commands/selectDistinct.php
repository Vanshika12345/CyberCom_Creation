<?php

require 'connection.php';

$query = "select distinct firstname, lastnamefrom user_login_details";
	$result = mysqli_query($conn, $query);

	if ($result) {
		while ($qr = mysqli_fetch_array($result)) {
				$name = $qr['firstname'];
				$lname = $qr['lastname'];
				$phone = $qr['phoneno'];
				
				echo $name.' '.$lname.' '.$phone."<br>";
			}
	} else {
		echo 'No results found';
	}	

?>