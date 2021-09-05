<?php
//Hashing
// echo md5("Let There be Light");
$password = "secrect password";
$hash = md5($password);

$userInput = "secrect password";
if(md5($userInput) == $hash){
    echo "password Correct";
}else{
    echo "Password incorrect";
}