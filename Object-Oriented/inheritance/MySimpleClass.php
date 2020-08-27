<?php
class MySimpleClass{
    public $propertyName = 'base property';
    function methodName(){
        echo 'I am base Method';
    }
}
class MyNewClass extends MySimpleClass{
    public $propertyNameAdd = "base property add";
    function addedMethod(){
        parent::methodName();
        echo 'I am an added method';
    }
   
}
$object = new MyNewClass();
$object->propertyName;
$object->propertyNameAdd;
$object->methodName() .PHP_EOL;
$object->addedMethod();