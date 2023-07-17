<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject1 = $_POST['subject1'];
$message = $_POST['message'];

// $email_from = 'info@mywe.com';
// $email_subject = 'New Form Submission';
// $email_body = 'User Name: $name.\n'.'User Email: $visitor_email\n'.
// 'User Subject: $subject.\n'.'User Message: $message.\n';

// $to ='rc002827@gmail.com';

// $headers = "From: $email_from \r\n"; 

// $headers = "Reply-To: $email \r\n";

// mail($to,$email_subject,$email_body,$headers);

// header("Location: index.html");

$to = "rc002827@gmail.com";
$subject = "Mail From Site";
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Message = " . $message;

$headers = "From: something@yoursite.com" . "\r\n" . 
"CC: somebodyelse@example.com";

if($email!=NULL){
    mail($to,$subject1,$txt,$headers);
}

header("Location: index.html");


?>