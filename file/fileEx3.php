<?php
$fileName = "/home/akash/Desktop/lwhh_source_code/file/data/f1.txt";
// $line = fgets($fp);
if(!is_readable($fileName)){
  throw new Exception("file not readable");
}elseif(is_readable($fileName)){
  $fp = fopen($fileName,"r");
  while($line = fgets($fp)){
    echo $line;
  }
  while($line = fgets($fp)){
    echo $line;
  }
  fclose($fp);
}
// print_r($line);
