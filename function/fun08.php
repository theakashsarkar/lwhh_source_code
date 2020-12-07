<?php
function fibonacci( int $old, int $new, int $end ):void {
    static $start;
    $start = $start ?? 1;

    if($start > $end) {
        return;
    }
    $start++;
    echo $old." ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;
    fibonacci($old, $new, $end);
}
fibonacci(0,1,1,12);