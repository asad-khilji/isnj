<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['tel']))
$tel = $_POST['tel'];
if(isset( $_POST['message']))
$message = $_POST['message'];

$content="From: $name \r\n
Email: $email \r\n
Phone: $tel \r\n
Message: $message";
$recipient = "khiljiasad2@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error");
echo "Email sent!";
?>