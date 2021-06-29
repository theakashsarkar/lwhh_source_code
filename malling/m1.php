<?php
$to = "liton123sarkar@gmail.com";
$from = "test@example.com";
$subject = "How is life";
$body  = "Hello\n How are you?";
$header = "From: {$body}\r\n";
echo mail($to, $subject, $body, $header);