<?php
$fileName =  "/home/akash/Desktop/lwhh_source_code/file/data/f7.txt";
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
// $fp = fopen($fileName,"w");
// foreach($students as $student){
//     fputcsv($fp,$student);
// }
// fclose($fp);


// $fp = fopen($fileName,"r");
// while($data = fgets($fp)){
//     $student = explode(",",$data);
//     printf("Name : %s %s \n Age : %s\n Class : %s\n Roll : %s\n\n",$student[0],$student[1],$student[2],$student[3],$student[4]);
// }

// $fp = fopen($fileName,"r");
// while($student = fgetcsv($fp)){
//     printf("Name : %s %s \n Age : %s\n Class : %s\n Roll : %s\n\n",$student[0],$student[1],$student[2],$student[3],$student[4]); 
// }
$data = file($fileName);
unset($data[0]);
$post = [
    'fName' => "post",
    'lName' => "Sarkar",
    'age'   => 34,
    'class' => 3,
    'roll'  => 22,
];
$fp = fopen($fileName,"a");
fputcsv($fp,$post);
fclose($fp);

