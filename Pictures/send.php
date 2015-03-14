<?php

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$message = $_POST['message'];


$to = "misa.sunybuffalo@gmail.com";
$subject = "Site Contact Form";
$body = "From: " . $firstname . " " . $lastname . " " . $message;


mail($to, $subject, $body);

echo "Message Sent!";

?>