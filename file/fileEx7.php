<?php
$fileName = "/home/akash/Desktop/lwhh_source_code/file/data/f4.txt";
file_put_contents($fileName,"ame\n",FILE_APPEND | LOCK_EX);
file_put_contents($fileName,"post\n",FILE_APPEND | LOCK_EX);