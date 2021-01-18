<?php $fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $fname ' ' $lname \n Message: $message";
$recipient = "shreshtkashyap@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>