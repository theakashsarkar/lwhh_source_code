<?php
$vegetables = explode(', ','brinjal, brocolli, carrot, capsicam'); //string to array php built in function
$vegetables = preg_split('/(, |,)/','brinjal, brocolli, carrot, capsicam,onnion');
print_r($vegetables);

$vegetablesString = join(', ',$vegetables);
echo $vegetablesString;
echo PHP_EOL;
var_dump($vegetables);