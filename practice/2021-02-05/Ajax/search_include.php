<?php

$conn = mysqli_connect('localhost','root','','user_db');
if (isset($_GET['keyword'])) {
	$search = $_GET['keyword'];
}
if (!empty($search)) {
	if ($conn) {
		$query = "select `name` from `names` where name like '".mysqli_real_escape_string($conn,$search)."%'";
	$result = mysqli_query($conn,$query);

		if ($result) {
			while ($qr = mysqli_fetch_assoc($result)) {
				echo $name = $qr['name'].'<br>';
			}

		}
	}
}
?>