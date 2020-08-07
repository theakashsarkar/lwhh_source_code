<?php
echo ord('A');
echo PHP_EOL;
echo ord('a');
echo PHP_EOL;
echo chr(65);
for($i = 1; $i <= 128; $i++){
    $char = chr($i);
    // echo $char;
    $ascii = ord($char). "=" .$char;
    echo $ascii."\n";
    
}