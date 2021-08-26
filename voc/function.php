<?php
function getStatusMessage($statusCode=0){
    $status = [
        '0' => "",
        '1' => "Duplicate email address",
        '2' => "username or password empty",
        '3' => "user create successfully"
    ];
    return $status[$statusCode];
}
