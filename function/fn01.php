<?php
/*
 * function file call
 */
include_once "functions.php";
$x = 12;
if(evenOrOdd($x)) {
    echo "{$x} is an even number";
} else {
    echo "{$x} is an odd number";
}