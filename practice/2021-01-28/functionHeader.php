<!--<h1>Welcome</h1>-->
<?php
//BY setting the output buffering to 0 or empty it will give warning else it will ignore
$redirect_page = 'http://google.co.in';
$redirect = true;

if ($redirect){
	header('Location: '.$redirect_page);
}

?>

