<?php
//built in function implemantio with string;
$string = "HELLOW WORLD,WORLD HOW ARE YOU";
$parts  = explode(",",$string);
print_r($parts);
echo PHP_EOL;
$original = join(" ",$parts);// implode and join same function
echo $original;
echo PHP_EOL;
$parts2 = str_split($string);
print_r($parts2[0]);
echo PHP_EOL;
$part3 = strtok($string," ,");
while($part3 !== false){
    echo $part3."\n";
    $part3 = strtok(" ,");//strtok build in function 
}
$part4 = preg_split("/ |,/",$string);
print_r($part4);