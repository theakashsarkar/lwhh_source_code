<?php
// $publicKey = openssl_get_publickey(file_get_contents("./keys/public.pem"));
// $message = "Secrect password";
// openssl_public_encrypt($message, $encrypt, $publicKey);
// echo bin2hex($encrypt);
$publicKey = openssl_get_publickey(file_get_contents("public.pem"));
$message = "Secrect Password";
openssl_public_encrypt($message, $encryptedMessage, $publicKey );
echo bin2hex($encryptedMessage);
echo "\n";

$privateKey = openssl_get_privatekey(file_get_contents("private.pem"),"hello");
openssl_private_decrypt($encryptedMessage,$decryptedMessage, $privateKey);
echo "\n";
echo $decryptedMessage;