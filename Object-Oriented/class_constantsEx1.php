<?php
class simpleClass{
    const ONE = 1;
    const NAME = 'STORY MAKER';

    function getName(){
        self::NAME;
    }
}
echo simpleClass::NAME;