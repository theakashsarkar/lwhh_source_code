<?php
$to = "thekashsarkar7@gmail.com";
$from = "John <test@example.com>";
$subject = "How is life Html"; 
$body = "<strong>Hello</strong><br/>কি খবর কেমন আছে";
$body.= "<img src='https://unsplash.com/photos/t8Rp4BqlJ8A'>";
$header = "MIME-version: 1.0\r\n";
$header .= "Content-type:text/html;charset = UTF-8\r\n";
$header .= "From: {$from}\r\n";
echo mail($to, $subject, $body, $header);

