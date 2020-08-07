<?php
$string = "Hello World";
// echo $strig[0];
$length = strlen($string);
echo substr($string,$length-3);//with length char
echo PHP_EOL;//End Of Line;
echo substr($string,-3);//without length
echo PHP_EOL;
echo substr($string,-8,-2);