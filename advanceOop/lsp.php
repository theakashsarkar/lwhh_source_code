<?php
abstract class Bird{
    abstract function eat();
    abstract function sleep();
   
}
abstract class FlyingBird extends Bird{
    abstract function fly();
}
abstract class walkingBird extends Bird{
    abstract function walk();
}
class BirdManager{
    function maintainBird(Bird $b)
    {
        $b->eat();
        $b->sleep();
    }
    function moveFlyingBird(FlyingBird $fb){
        $fb->fly();
    }
}

class Eagle extends FlyingBird{
    function eat(){

    }
    function sleep(){

    }
    function fly(){

    }
}
class Pengui extends walkingBird{
    function eat(){

    }
    function sleep(){

    }
    function walk(){

    }
}