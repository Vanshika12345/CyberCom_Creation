<?php


if (isset($_FILES['fileupload']['name'])) {
	$name = $_FILES['fileupload']['name'];
	$size = $_FILES['fileupload']['size'];
	$type = $_FILES['fileupload']['type'];

	$tmpName = $_FILES['fileupload']['tmp_name'];

	if (!empty($name)) {
		
		$location = 'uploads/';
		//echo $tmpName;
		if (move_uploaded_file($tmpName, $location.$name)) {
			echo 'File uploaded!';
		} else{
			echo 'Some error occured!';
		}
	}
} else{
	echo 'Please choose a file';
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = 'post' enctype ='multipart/form-data'>
		<input type="file" name="fileupload"><br><br>
		<input type="submit" name="submit">
</form>