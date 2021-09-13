<?php
// openssl
// print_r(openssl_get_cipher_methods());
//aes-128-ccm
$methodName = "aes-128-ccm";
$iv_length = openssl_cipher_iv_length($methodName);
$iv = openssl_random_pseudo_bytes($iv_length);

$message = "this is secret message";
$password = "secret password";
$encryptedMessage = openssl_encrypt($message, $methodName, $password, 0, $iv, $tag );

echo openssl_decrypt($encryptedMessage, $methodName, $password, 0, $iv, $tag );
echo "\n";
echo $encryptedMessage;

// $message = "This is a secret message";
// $password = "Secret Password";
// $encryptedMessage = openssl_encrypt($message,$methodName, $password, 0, $iv, $tag);
// echo $encryptedMessage;
// echo "\n";
//  echo openssl_decrypt($encryptedMessage,$methodName,$password, 0, $iv);
// echo $decryptedMessage;