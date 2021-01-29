<?php
//r- reading, w-writing, a-appending

//writing the input from user to file
if (isset($_POST['name'])) {
	$name = $_POST['name'];
	if (!empty($name)) {
			$file = fopen('file1.txt', 'a');
			fwrite($file, $name."\n");
			fclose($file);
	}
//reading from the file

	$readFile = file('file1.txt');
		$file_count = count($readFile);
		$count = 1;
		echo "Names are : ";
	foreach ($readFile as $file) {
		echo trim($file);

		if ($count < $file_count) {
			echo ', ';
		}
		$count++;
	}
} else{
		echo "please enter a name";
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Reading a file</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = 'post'>
		Name : <input type="text" name="name"><br><br>
		<input type="submit" name="add" value="Add">
	</form>
</body>
</html>