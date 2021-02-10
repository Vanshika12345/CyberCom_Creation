<?php

require 'connectingToServer.php';

$query = "select `firstname`, `lastname`from `user_login_details` order by `id` desc limit 1";
$result = mysqli_query($conn,$query);
if ($result) {
	while ($qr = mysqli_fetch_array($result)) {
		echo $qr['firstname'];
	}
	
} else {
	echo 'Couldn\'t update';
}

?>