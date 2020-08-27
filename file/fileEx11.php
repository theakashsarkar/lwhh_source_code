<?php
$fileName = "/home/akash/Desktop/lwhh_source_code/file/data/f9.txt";
$students = array(
    array(
        'fName' => 'shine',
        'lName' => 'Ahmaed',
        'age'   => 12,
        'class' => 7,
        'roll'  => 11,

    ),
    array(
        'fName' => "Akash",
        'lName' => "Sarkar",
        'age'   => 23,
        'class' => 3,
        'roll'  => 2,
    ),
    array(
        'fName' => "sujan",
        'lName' => "Sarkar",
        'age'   => 34,
        'class' => 3,
        'roll'  => 22,
    ),
);
// $fileEncode = json_encode($students);
// file_put_contents($fileName,$fileEncode,LOCK_EX);
$data = file_get_contents($fileName);
$jsonDcode = json_decode($data,true);
print_r($jsonDcode);
echo $jsonDcode[0]['fName'];