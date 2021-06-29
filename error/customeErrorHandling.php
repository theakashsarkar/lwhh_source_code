<?php
function custom_error_handler($severity, $msg, $file, $line)
{
    echo "erro [{$severity}]: {$msg} in {$file} on line number";
}
// set_error_handler('custom_error_handler');
// trigger_error("this is an error");
// echo substr([123], 1);
