<?php
require_once("phpmailer/PHPMailer.php");
require_once("phpmailer/Exception.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$pm = new PHPMailer(true);
try{
    $pm->setFrom("test@example.com");
    $pm->addAddress("theakashsarkar@gmail.com");
    $pm->Subject = "Here is the my invoice";
    $pm->Body = "Hi, Here is the <strong>invoice</strong> from your last ";
    $pm->AltBody = "Here is the invoice from your last purchase";
    $pm->isHTML(true);
    $pm->addAttachment("/home/sujan/work/lwhh_source_code/malling/hello.pdf");
    $pm->send();
    echo "mail sent"; 
}catch (Exception $e){
    echo "Faild".$pm->ErrorInfo;
}