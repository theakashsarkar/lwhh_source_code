<?php
$fileName = "/home/akash/Desktop/lwhh_source_code/file/data/f3.txt";
$fp = fopen($fileName,"w+");
fwrite($fp,"time\n");
//fseek($fp,0);
rewind($fp);
$line = fgetc($fp);
echo $line;
// fclose($fp);