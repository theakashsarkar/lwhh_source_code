<?php
define("DB_HOST","127.0.0.1");//localhost
define("DB_NAME","lwhh_07");
define("DB_USER","root");
define("DB_PASSWORD","");
$connection = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );

$stmt = $mysqli->prepare("INSERT INTO student(class,section,roll) values(?,?,?,?);");
$class='';$section='';$roll='';
$stmt->bind_param('isi', $class, $section, $roll);
$csv_data = array_map("str_getcsv",file( 'babynames-clean.csv' ));
shuffle($csv_data);
$_students = [];
$section = ['A','B','C','D'];
for( $i=0; $i<10; $i++ ){
    $name = $csv_data[$i][0];
    $sex  = $csv_data[$i][1] == 'boy' ? "M" : "F";
    $class =1; rand(1,10);
    $section = $section[array_rand($section)];
    $_students["{$class}{$section}"][] = 1;
    $roll = count($_students["{$class}{$section}"]);
    printf("%s:%s:%s:%s:%s\n",$name,$sex,$class,$section,$roll);
    $stmt->execute();
   
}