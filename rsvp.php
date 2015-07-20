<?php

$to = "misa.sunybuffalo@gmail.com";
$subject = "RSVP";
$studentname = $_GET['studentname'];
$ubemail = $_GET['ubemail'];
$body = "Name: $studentname\n"; 
$body .= "Email: $ubemail";

mail($to, $subject, $body);


echo "Thank you for your RSVP.\n";
echo "";

echo "<a href=\"http://www.som.buffalo.edu/students/clubs/MIS/index.php\">Go Back to Site</a>";
?>

