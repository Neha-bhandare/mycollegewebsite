<?php
$name =$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject= 'New Form Submission';
$email_body = "user Name: $name.\n".
                "user Email:$visitor_email.\n". 
                "subject: $subject.\n". 
                "user message: $message .\n";

$to='nehabhandare613@gamil.com';
$headers ="from: $email_form \r\n";
$headers ="reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("location: contact.html");











?>