<?php
$fileName = '/home/akash/Desktop/lwhh_source_code/file/data/f3.txt';
$fp = fopen($fileName,"r+");
$line = fgets($fp);
echo $line;
fwrite($fp,'Earth');
$line = fgets($fp);
echo $line;
fseek($fp,0);
fwrite($fp,'ame');
$line = fgetc($fp);
echo $line;
fclose($fp);