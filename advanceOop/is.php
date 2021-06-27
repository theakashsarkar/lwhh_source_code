<?php
interface Vehicle{
    function getMileage();
    function price();
    function getName();
}
interface twoWheelers{

}
interface threeWheelers{

}
class motorcycle implements Vehicle, twoWheelers{

}
class Truck implements Vehicle, threeWheelers{
    
}