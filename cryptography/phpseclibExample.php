<?php
require __DIR__."/vendor/autoload.php";
use phpseclib\Crypt\RSA;
$message = 'this is a secret message';
$rsa = new RSA();
$rsa->loadKey(file_get_contents("id_rsa.pub"));
$encText = $rsa->encrypt($message);
echo $encText;