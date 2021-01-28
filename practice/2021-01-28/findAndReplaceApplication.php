<!DOCTYPE html>
<?php
$offset = 0;
$string = 'Empty';
if (isset($_POST['user_input']) && !empty($_POST['user_input'])) {
	if(isset($_POST['searchString']) && !empty($_POST['searchString'])){
		if(isset($_POST['replaceString']) && !empty($_POST['replaceString'])){
			$search = $_POST['searchString'];
			$replace = $_POST['replaceString'];
			$string = $_POST['user_input'];
			$length = strlen($search);
			//works for first occurence of search string
			//$position = stripos($string, $search);
			//$user_new_input = substr_replace($string, $replace, $position,$length);
			while ($pos = strpos($string, $search,$offset)) {
				$offset = $pos + $length;
				$string = substr_replace($string, $replace, $pos,$length);

			}
			echo $string."<br><br>";
		}
	}
}


?>
<html>
<head>
	<title>Find and Replace Application</title>
</head>
<body>
	<form action="findAndReplaceApplication.php" method="post">
			<textarea rows="6" cols="30" name="user_input"><?php echo $string; ?></textarea><br><br>
			<label for = "search">Search for:</label><br>
			<input type="text" name="searchString"><br><br>
			<label for="replace">Replace with:</label><br>
			<input type="text" name="replaceString"><br><br>
			<input type="submit" name="submit" value="Find and Replace">

		
	</form>
</body>
</html>
