<?php
function printN(int $n):void {
    if($n >= 10) {
        return;
    }
    echo $n."\n";
    $n++;
    printN($n);
}
//printN(2);
/*
 * recursive function
 * recursion
 */
function printNumber(int $count, int $end, int $stepping = 1):void {
    if( $count > $end ) {
        return;
    }
    echo $count."\n";
    $count += $stepping;
    printNumber( $count, $end, $stepping );
}
printNumber( 21, 27, 2);