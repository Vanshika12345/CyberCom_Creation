<?php

include 'serverVariable_2.php';
if (isset($_POST['submit']) && !empty($_POST['userName'])) {
	echo ' Welcome '.$_POST['userName'];
	echo '<br> Host name :'.$host_name;

	print_r($_SERVER);
}

?>