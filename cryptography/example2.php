<?php
$password = "this is secrect password";
$key = "this personal message";
// print_r(hash_hmac_algos());
echo hash_hmac("whirlpool",$password, $key);