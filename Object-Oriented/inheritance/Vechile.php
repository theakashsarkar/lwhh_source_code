<?php
class Vechile{
    public $make;
    public $model;
    public $color;
    public $noOfwheels;
    public $engineNumber;

    function __construct($make,$model,$color,$noOfwheels,$engineNumber){
        $this->make         = $make;
        $this->model        = $model;
        $this->color        = $color;
        $this->noOfwheels   = $noOfwheels;
        $this->engineNumber = $engineNumber;
    }
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
        return $this->noOfwheels;
    }
    function getEngineNumber(){
        return $this->engineNumber;
    }
}