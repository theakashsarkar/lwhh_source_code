<?php
//Crypt
$message = "This is a secrect message";
$blowfish_salt = "$2y$10$". bin2hex(openssl_random_pseudo_bytes(11));
echo crypt($message, $blowfish_salt);
