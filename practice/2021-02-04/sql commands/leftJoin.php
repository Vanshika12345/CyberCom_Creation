<?php
	require 'connection.php';
	$count = 0;
	$query = "select u.firstname, u.lastname, ud.phoneno from user_login_details u left join user_details ud on u.id = ud.user_id";
	$result = mysqli_query($conn, $query);

	if ($result) {
		while ($qr = mysqli_fetch_array($result)) {
				$name = $qr['firstname'];
				$lname = $qr['lastname'];
				$phone = $qr['phoneno'];
				
				echo $name.' '.$lname.' '.$phone."<br>";
			}	

		//$count = count($result);	
	} else {
		echo 'No results found';
	}


?>
<!--
<!DOCTYPE html>
<html>
<head>
	<title>Left Join</title>
</head>
<body>
	<table>
		<tr>
			<th>Fname</th>
			<th>last name</th>
			<th>phone no</th>
		</tr>
		<tr>
			<?php
		/*	for($i = 0; $i<=$count; $i++){
			echo '<td>'.$name .'</td>';
			echo '<td>'.$lname.' </td>';
			echo '<td>'.$phone .'</td>'; 
		}*/?>
		</tr>
	</table>
</body>
</html>-->
