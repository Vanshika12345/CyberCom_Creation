<?php ob_start(); ?>

<h1>Welcome</h1>

<?php

$redirect_page = 'http://google.co.in';
$redirect = false;

if ($redirect){
	header('Location: '.$redirect_page);
}
//ob_end_flush();
ob_end_clean();
?>

