<?php

$name = $_POST['name'];
$vistor_email = $_POST['email'];

$message = $_POST['message'];



$email_form ='sheezan_k@yahoo.com';
$email_subject ="new form submission";
$email_body = "user name; $name.\n".
                  "user Email; $vistor_email\n".

                  "user Message; $message\n".;

$to = "farhanalee26@gmail.com";

$headers = "From: $email_form\r\n";

$headers = "Reply-to: $vistor_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("location:index.html");



?>
