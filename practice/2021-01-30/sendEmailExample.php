<?php

$sendTo = 'vanshikaagarwal544@gmail.com';
$subject = 'This is an email';
$body = 'This is a example for sending email';
$header = 'From: vanshikaagarwal544@gmail.com';

if (mail($sendTo, $subject, $body, $header)){
	echo 'Email sent';
} else {
	echo 'Error occured';
}
/**
--php.ini-----
[mail function]
SMTP=smtp.gmail.com
smtp_port=587
sendmail_from = vanshikaagarwal544@gmail.com

sendmail_path ="\"C:\xampp\sendmail\sendmail.exe\" -t"

----sendmail.ini----

smtp_server=smtp.gmail.com

smtp_port=587
error_logfile = error.log
debug_logfile = debug.log
auth_username= vanshikaagarwal544@gmail.com
auth_password= your-gmail-password

force_sender= vanshikaagarwal544@gmail.com
hostname= localhost
*/

?>