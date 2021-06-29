<?php
function custom_error_handler($severity, $msg, $file, $line)
{
    switch ($severity):
        case E_WARNING:
            echo "erro [{$severity}]: {$msg} in {$file} on line number";
        break;
        case E_ERROR:
            echo "erro [{$severity}]: {$msg} in {$file} on line number";
        break;
        default:
        echo "erro [{$severity}]: {$msg} in {$file} on line number";       
    
}
 set_error_handler('custom_error_handler');
// trigger_error("this is an error");
// echo substr([123], 1);

function division($divident, $divisor)
{
    if(0 == $divisor){
        trigger_error("cannot divied by 0");
    }else{

        return $divident/$divisor;
    }
}
echo division(10,0);