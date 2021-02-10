<?
include 'connection.php';
session_start();
if(loggedIn()){
	session_destroy();
	$file = 'login_html.php';
	header('Location: '.$file);
}
?>