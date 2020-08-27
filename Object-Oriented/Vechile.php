<?php
class Vehicle
{
    public $make = 'DefaultMake';
    public $model = 'DefaultModel';
    public $color = 'DefaultColor';
    public $noOfWheels = 0;
    public $engineNumber = 'XXXXXXXX';

    function getMake(){
        return $this->make;
    }
    function getModel(){
        return $this->model;
    }
    function getColor(){
        return $this->color;
    }
    function getNoOfWheels(){
        return $this->noOfWheels;
    }
    function getEngineNumber(){
        return $this->engineNumber;
    }
    function setMake($make){
        $this->make = $make;
    }
    function setModel($model){
        $this->model = $model;
    }
    function setColor($color){
        $this->color = $color;
    }
    function setNoOfWheels($noOfWheels){
        $this->noOfWheels = $noOfWheels;
    }
    function setEngine($engineNumber){
        $this->engineNumber = $engineNumber;
    }
}
$object = new Vehicle();
$object->setMake('Honda');
$object->setModel('civic');
$object->setColor('red');
$object->setNoOfWheels(4);
$object->setEngine('123ABCD');
echo 'Make'.$object->getMake();