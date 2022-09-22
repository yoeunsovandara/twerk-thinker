<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form= 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Name: $visitor_email.\n".
              "User Name: $subject.\n".
              "User Name: $message .\n";

$to = 'yoeunsovandara86@gmail.com';

$headers = "From: $email_from \r\n";

mail($to,$email_subject, $email_body, $headers);

header("Location: contact.html");
?>