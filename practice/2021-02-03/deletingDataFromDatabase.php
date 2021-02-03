<?php

require 'connectingToServer.php';

$query = "delete from `user_login_details` where `id` = 1";

if (mysqli_query($conn,$query)) {
	echo 'Deleted..';
} else {
	echo 'Couldn\'t delete';
}

?>