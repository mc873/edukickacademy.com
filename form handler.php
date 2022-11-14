<?php
$name =$_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'infoedukickacademy.com';

$email_subject = 'New Form Submission';

$email_body = "user name: $name.\n".
               "user email: $visitor_email.\n".
               "subject: $subject.\n".  
                "user message: $message .\n";

$to = 'fycs.mohanchoudhary.18309@gmail.com';

$headers = "form: $email_form \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");


?>