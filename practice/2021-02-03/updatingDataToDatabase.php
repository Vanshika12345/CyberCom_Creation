<?php

require 'connectingToServer.php';

$query = "update `user_login_details` set `lastname` = 'Agarwal' where `id` = 1";

if (mysqli_query($conn,$query)) {
	echo 'Updated..';
} else {
	echo 'Couldn\'t update';
}

?>