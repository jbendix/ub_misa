<?php

$firstname = $_GET['first_name'];
$lastname = $_GET['last_name'];
$email = $_GET['email'];
$message = $_GET['message'];

//sets up body of email message
$to = "misa.sunybuffalo@gmail.com";
$subject = "Site Contact Form";
$body = "Firstname: $firstname\n";
$body .= "Lastname: $lastname\n";
$body .= "Email: $email\n";
$body .= "Message: $message";

// make sure each line doesn't exceed 70 characters
$body = wordwrap($body, 70);

//sends email
mail($to, $subject, $body);

echo "Your message has been sent.";
echo "<a href=\"http://www.som.buffalo.edu/students/clubs/MIS/index.php\">Go Back to Site</a>";

?>