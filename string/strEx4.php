<?php
$string = "Hello world";
$length = strlen( $string ) - 1;
echo PHP_EOL;
for ( $i = $length; $i >= 0; $i-- ) { //for loop with string reverse
    echo $string[$i];
}
echo PHP_EOL;
$length = strlen( $string );
for ( $i = 1; $i <= $length; $i++ ) { //for loop with string reverse;
    echo $string[$i * -1];
}
echo PHP_EOL;
echo strrev( $string ); //build in function with string reverse;
$str = substr($string,0,4);
echo PHP_EOL;
echo strrev($str);
echo strrev($string);