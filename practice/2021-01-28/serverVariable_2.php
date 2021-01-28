<?php
$script_name = $_SERVER['SCRIPT_NAME'];
$host_name = $_SERVER['HTTP_HOST'];
//echo $script_name;
//revise the host_name video
//use :
?>
<!DOCTYPE html>
<html>
<head>
	<title>server variable</title>
</head>
<body>
	<form action="<?php echo $script_name; ?>" method = 'post'>
		<input type="text" name="userName"><br><br>
		<input type="submit" name="submit"><br>
	</form>
</body>
</html>