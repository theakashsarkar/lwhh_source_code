<?php
// $secretPassword = "WOW";
// $message = "This is a secret message";
// $hash = md5($message.$secretPassword);
// echo $hash;
$secretPassword = "WOW";
$message = "This is a secrect message";
$hash    = mhash(MHASH_SHA512, $message, $secretPassword);
echo bin2hex($hash);