<?php
include_once "config.php";
$action = $_POST['action'] ?? "";
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if(!$connection){
    throw new Exception("Cannot connect to database");
}else{
    if(!$action){
        header('Location : index.php');
        die();
    }else{
        if('add' == $action){
            $task = $_POST['task'];
            $date = $_POST['date'];
            if($task && $date){
                $query = "INSERT INTO tasks (task,dates) VALUES('{$task}','{$date}')";
                mysqli_query($connection,$query);
                header('Location: index.php?added=true');
            }
        }else if('complete' == $action){
            $taskid = $_POST['taskid'];
            if ( $taskid ) {
				$query = "UPDATE task SET complete=1 WHERE id={$taskid} LIMIT 1";
				mysqli_query( $connection, $query );
			}
			header( 'Location: index.php' );
        }
    }
}