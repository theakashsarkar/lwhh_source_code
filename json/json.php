<?php
$data = array(
    'firstName' => 'Akash',
    'lastName'  => "Sarkar",
    "email"     => "akashsarkar@gmail.com"
);
//Json

echo json_encode($data,JSON_PERTTY_PRINT);