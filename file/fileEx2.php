<?php
$fileName = "/home/akash/Desktop/lwhh_source_code/file/data/f2.txt";
// $existingData = file_get_contents($fileName); 
// $fp = fopen($fileName,"w");
// fwrite($fp,$existingData);
$fp = fopen($fileName,"a");
fwrite($fp,"venus\n");
fwrite($fp,"data\n");
fclose($fp);