<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "navbirdhillon.tu@gmail.com";
$subject = $__POST['subject'];
$headers = "From: " . $email;
$txt = "You have received a new message from " . $name . "\n\n" . $message;

if (mail($to, $subject, $txt, $headers)) {
  http_response_code(200);
  echo "Email sent successfully";
} else {
  http_response_code(500);
  echo "Error sending email";
}

?>
