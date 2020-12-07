<?php
$name = 'Earth';//global scope
/*
 * variable  scope example
 */
//function doSomething():void {
//    global $name; //global variable
//    echo $GLOBALS['name'];//super global array
//    //echo $name;
//}
//doSomething();
/*
 * local scope
 */
//function doSomething():void {
//    $name = 'Earth'; //local scope
//    echo $name;
//}
//doSomething();
/*
 * static scope
 */
function doSomething():void {
    static $i;//static scope
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}
function doExtra():void {
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}
doSomething();
doSomething();
doSomething();
doExtra();
doExtra();