<?php
include_once "config.php";
$status = [
    '0' => 'Duplicate email address',
    '1' => 'Username or Password emapty',
];
$action = $_POST['action'];
$status_code = 0;
$connection = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );;
if( ! $connection ){
    throw new Exception("connot connection to database");
}else if('register' == $action){
    $username = $_POST['email'];
    $password = $_POST['password'];
    if($username && $password){
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO users(email, password) VALUES('{$username}','{$hash}')";
        mysqli_query($connection, $query);
        if(mysqli_error($connection)){
            $status_code = 1;
        }
    }else {
        $status_code = 2;
    }
    header("Location: index.php?status={$status_code}");
}