<?php
//abcd123 - subha
//abcd123-dr123
//1234 - sr123
//pass123 - vanshika
if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$hashPassword = md5($password);
	if (!empty($username) && !empty($password)) {
		
		$query = "select id from user_login_details where user_name = '$username' and user_password = '$hashPassword'";
		$result = mysqli_query($conn, $query);
		
		if ($result) {
		
			$num_rows = mysqli_num_rows($result) ;
		
			if ($num_rows == 0) {
		
				echo 'Invalid Username and Password';
		
			} else if ($num_rows == 1) {
		
				while ($qr = mysqli_fetch_array($result)) {
					$u_id = $qr['id'];
				}
		
				$_SESSION['user_id'] = $u_id;
				header('Location: index.php');
				
			}
		}

	} else {
		echo 'Please enter the details';
	}
}



?>
<form action="<?php echo $current_file; ?>" method ='post'>
	Username <input type="text" name="username"><br><br>
	Password <input type="password" name="password"><br><br>
	<input type="submit" name="submit" value="login">

</form>