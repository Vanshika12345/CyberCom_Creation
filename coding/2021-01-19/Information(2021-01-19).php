<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
table{
	width: 50%;
	height: 170px;
	border: 2px solid;
	text-align: center;
}
</style>
<body>
	<?php

		if ($_POST['btnSubmit']) { 
					$firstName = $_POST['firstName'];
					$month = $_POST['month'];
					$day = $_POST['day'];
					$year = $_POST['year'];
					$email = $_POST['email'];
					$password = $_POST['password'];
					$phone = $_POST['phone'];
			}
	?>
<table rules="all">
	<tr>
		<th>Name</th>
		<th>Date Of Birth</th>
		<th>Email</th>
		<th>Phone</th>
	</tr>
	<tr>
		<td><?php echo $firstName; ?></td>
		<td><?php echo $day,' ',$month,' ',$year; ?></td>
		<td><?php echo $email; ?></td>
		<td><?php echo $phone; ?></td>
	</tr>
</table>	
</body>
</html>