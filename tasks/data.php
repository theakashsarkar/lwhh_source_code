<?php
include_once "config.php";
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if(!$connection){
    throw new Exception("Cannot connect to database");
}else{
    echo "connected";
    //insert data
    // mysqli_query($connection, "INSERT INTO tasks(task,date) VALUES ('Do Somthing','2021-8-7')");
    // $result = mysqli_query($connection, "SELECT * FROM tasks");
    // while($data = mysqli_fetch_array($result)){
    //     echo "<pre>";
    //     print_r($data);
    //     echo "<pre>";
    // }
    mysqli_close($connection);
}