<?php

// Get form data
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


// Email configuration
$email_from = 'nms@info.com';
$email_subject = 'New Form Submission';


// Email body
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";


// Where the email will be sent
$to = 'tseringl395@gmail.com';


// Email headers
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";


// Send email
mail($to, $email_subject, $email_body, $headers);


// Redirect back to contact page
header("Location: contact.html");

?>