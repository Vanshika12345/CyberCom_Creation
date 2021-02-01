<?php

	if (isset( $_POST['username']) && isset($_POST['userpassword']) && isset($_POST['address']) && isset( $_POST['game']) && isset($_POST['gender']) && isset($_POST['age']) && isset($_FILES['fileupload']['name'])) {
		
		$name = $_POST['username'];
		$password = $_POST['userpassword'];
		$address = $_POST['address'];
		$game = $_POST['game'];
		$count = count($game);
		$gender = $_POST['gender'];
		$age = $_POST['age'];
		$file = $_FILES['fileupload']['name'];
		//
		if($name != '' && $password != '' && $address != ''&& $age != '' && $game != '' && $gender != '' && $file != ''){

			echo 'Your name '.$name;
			echo '<br>Your address'.$address;
			echo '<br>Your favourite games ';
			for($i = 0; $i<$count; $i++) {
				echo $game[$i].', ';
			}
			echo '<br>Your age '.$age;
			echo '<br>File uploaded '.$file;
	}
}
?>	