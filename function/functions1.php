<?php
/*
 * Determines if the argument is factorial
 */
function factorial(int $n) { //paameter
    $result = 1;
    for ($i = $n; $i > 1; $i--) {
        $result *= $i;
    }
    return $result;
}