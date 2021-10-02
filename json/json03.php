<?php
class Person{
    public $firstName;
    public $lastName;

}
$p = new Person();
$p->firstName = "Akash";
$p->lastName  = "sarkar";

$jsonData        = json_encode($p);
$decodedJsonData = json_decode($jsonData);
print_r($decodedJsonData);

