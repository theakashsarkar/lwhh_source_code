<?php

class Car{
    function getName(){
        return 'car';
    }    
}
class truck{
    function getName(){
        return 'truck';
    }
}
abstract class vFactory{
    abstract function create();
}
class CarFactory extends vFactory{
    public function create(){
        return new Car();
    }
}
class truckFactory extends vFactory{
    public function create(){
        return new truck();
    }
}

class vichalFactory{
    function createVichal($type = 'car')
    {
        if('car' == $type){
            return new CarFactory();
        }
        elseif('truck' == $type)
        {
            return new truckFactory();
        }
    }
}
$vf = new vichalFactory();
$tf  = $vf->createVichal('truck');
$truck = $tf->create();
echo $truck->getName();