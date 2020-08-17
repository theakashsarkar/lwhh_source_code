<?php
$fileName = "/home/akash/Desktop/lwhh_source_code/file/data/f6.txt";
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

/*$fp = fopen($fileName,"w");
foreach($students as $student){
    $data = sprintf("%s,%s,%s,%s,%s\n",$student["fName"],$student["lName"],$student['age'],$student['class'],$student['roll']);
    fwrite($fp,$data);
}
fclose($fp);*/
$fp = fopen($fileName,"w");
foreach($students as $student){
    fputcsv($fp,$student);
}
fclose($fp);


// $fp = fopen($fileName,"r");
// while($data = fgets($fp)){
//     $student = explode(",",$data);
//     printf("Name : %s %s\n Age : %s\n Class : %s\n Roll : %s",$student[0],$student[1],$student[2],$student[3],$student[4]);
// }
// fclose($fp);

// $fp = fopen($fileName,"r");
// while($student = fgetcsv($fp)){
//     printf("Name : %s %s\n Age : %s\n Class : %s\n Roll : %s\n\n",$student[0],$student[1],$student[2],$student[3],$student[4]);
// };

// $student = [
//     'fName' => "amen",
//     'lName' => "Sarkar",
//     'age'   => 44,
//     'class' => 4,
//     'roll'  => 22,
// ];
// $fp = fopen($fileName,"a");
// fputcsv($fp,$student);

$data = file($fileName);
unset($data[2]);
$fp = fopen($fileName,"w");
foreach($data as $line){
    fwrite($fp,$line);

}
