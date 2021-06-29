<?php
ini_set('display_errors',0);
register_shutdown_function('fatal_error_handler');
    function fatal_error_handler(){
        $error = error_get_last();
        if($error){
            echo "this is error";
        }
    }
