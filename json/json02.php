<?php
class Person
{
    public $firstName;
    public $lastName;
    private $private;
}
$p = new Person;
$p->firstName = "Akash";
$p->lastName  = "Sarkar";

echo json_encode($p);