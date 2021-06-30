<?php
echo ini_get("error_log");
$header = "From: system@server.com";
$header .= "content-type: text/html; charset=ISO-8859-1\r\n";
// error_log("This is error message",1,"admin@server.com".$header);
$data = date("Y:m:d H:j:s");
error_log("{$data} Log in new file \n",3,"/tmp/error.txt");