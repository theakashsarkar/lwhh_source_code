<?php
class SpaceShuttle{
    function powerOn(){

    }
    function checkTemperture(){

    }
    function checkFuel(){

    }
    function startEngine(){

    }
    function startThrusters(){
        echo "Done";
    }
}

class spaceShuttleFacade{
    private $shuttle;
    function __construct(SpaceShuttle $shuttle){
        $this->shuttle = $shuttle;
    }
    function takeOff(){
        $this->shuttle->powerOn();
        $this->shuttle->checkTemperture();
        $this->shuttle->checkFuel();
        $this->shuttle->startEngine();
        $this->shuttle->startThrusters();
    }
}
$ss = new SpaceShuttle();
$ssf = new spaceShuttleFacade($ss);
$ssf->takeOff();