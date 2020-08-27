<?php
require_once "Vechile.php";
class Motorcycle extends Vechile{
    public $noOfWhile = 2;
    public $stork = 4; 
}
$motorcycle = new Motorcycle('Kawasaki', 'Ninja', 'Orange', 2,'53WVC14598');
echo "Vehicle Type: " . get_class($motorcycle) . PHP_EOL;
echo " Make: " . $motorcycle->make . PHP_EOL;
echo " Model: " . $motorcycle->model . PHP_EOL;
echo " Color: " . $motorcycle->color . PHP_EOL;
echo " No of wheels: " . $motorcycle->noOfWhile . PHP_EOL;
echo " No of strokes: " . $motorcycle->stork . PHP_EOL;