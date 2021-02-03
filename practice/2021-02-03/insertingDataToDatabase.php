<?php

require 'connectingToServer.php';

$query = "insert into user_login_details (user_name, user_password, firstname, lastname) values('vanshika123','pass123','Vanshika','Agrawal')";

if (mysqli_query($conn,$query)) {
	echo 'Inserted..';
} else {
	echo 'Couldn\'t insert';
}

?>