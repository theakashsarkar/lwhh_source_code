<?php
$fileName = "/home/akash/Desktop/lwhh_source_code/file/data/f8.txt";
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
$post = [
    'fName' => "post",
    'lName' => "Sarkar",
    'age'   => 34,
    'class' => 3,
    'roll'  => 22,
];
// $data = serialize($students);
// file_put_contents($fileName,$data,LOCK_EX);

$fileFromData = file_get_contents($fileName);
$data = unserialize($fileFromData);
print_r($data);
// unset($data[1]);
// array_push($data,$post);
// $ame = serialize($data);
// file_put_contents($fileName,$ame,LOCK_EX);