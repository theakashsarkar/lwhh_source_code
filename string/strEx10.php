<?php
$name = "Abul Hossian 01829215193";
// $parts = sscanf($name,"%s %s %11s");
// print_r($parts);
$parts = sscanf($name,"%s %s %11s",$fname,$lname,$number);
echo $lname;