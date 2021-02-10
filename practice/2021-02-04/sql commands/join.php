<?php

require 'connection.php';

$query = "select u.firstname, u.lastname, ud.phoneno from user_login_details u join user_details ud on u.id = ud.id";

$result = mysqli_query($conn, $query);

if ($result) {
	while ($qr = mysqli_fetch_array($result)) {
		echo $qr['firstname'].' '.$qr['lastname'].' '.$qr['phoneno'];
	}
}
?>