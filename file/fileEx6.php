<?php
$fileName = "/home/akash/Desktop/lwhh_source_code/file/data/f3.txt";
$fp = fopen($fileName,"a+");
fwrite($fp,"nutune");
$line = fgetc($fp);
echo $line;
