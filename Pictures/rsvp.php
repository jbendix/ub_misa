<?php

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];


$to = "misa.sunybuffalo@gmail.com";
$subject = "RSVP";
$body = "From: " . $firstname . " " . $lastname;


mail($to, $subject, $body);

echo "Thank you for your RSVP!";

?>