<?php
class PersonEx{
    function __destruct(){
        echo 'The object has been remove';
    }
}
$p1 = new PersonEx();
unset($p1);