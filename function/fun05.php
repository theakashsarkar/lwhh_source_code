<?php
/*
 * Number of argrument
 */
function sum (int ...$number):int {
    $result = 0;
    for ($i = 0; $i < count($number); $i++){
        $result += $number[$i];
    }
    return $result;
}
echo sum(10,20);