<?php

require 'connectingToServer.php';

$query = 'select `user_name` from `user_login_details`';

$result = mysqli_query($conn,$query);

if (!$result) {
	echo 'No entries found';
} else {
	echo 'Username : <br>';
	while ($qr = mysqli_fetch_array($result)) {
		echo $qr['user_name']."<br>";
	}
}

//continue from 117th video
?>