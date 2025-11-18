<?php
$to = "akasshpm@gmail.com";
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

$subject = "New Contact Form from " . $name;
$body = "Name: " . $name . "\nEmail: " . $email . "\n\nMessage:\n" . $message;
$headers = "From: " . $email;

if(mail($to, $subject, $body, $headers)) {
    echo "<script>alert('Thank you for your message!'); window.history.back();</script>";
} else {
    echo "<script>alert('Failed to send. Please try again.'); window.history.back();</script>";
}
?>
