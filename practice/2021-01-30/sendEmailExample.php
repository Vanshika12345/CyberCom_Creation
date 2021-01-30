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
[mail function]
; For Win32 only.
; http://php.net/smtp
SMTP=smtp.gmail.com
; http://php.net/smtp-port
smtp_port=25

; For Win32 only.
; http://php.net/sendmail-from
;sendmail_from = me@example.com

; For Unix only.  You may supply arguments as well (default: "sendmail -t -i").
; http://php.net/sendmail-path
sendmail_path ="\"C:\xampp\sendmail\sendmail.exe\" -t

sendmail.ini

smtp_server=smtp.gmail.com

; smtp port (normally 25)

smtp_port=25

auth_username= vanshikaagarwal544@gmail.com
auth_password= yourpassword

force_sender= vanshikaagarwal544@gmail.com
hostname= localhost
*/

?>