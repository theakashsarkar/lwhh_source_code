<?php
$string = "Quick brown brown fox jumps over the lazy fox dog";
$string = str_ireplace(array('brown',"fox"),array("red","cat"),$string,$count);
echo $string;
echo PHP_EOL;
echo $string;
echo PHP_EOL;
echo "total Replace: {$count}";
