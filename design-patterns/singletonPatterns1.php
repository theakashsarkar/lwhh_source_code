<?php
class FileWrite
{
    static $instances = [];
    private $fileName;

    function __construct($fileName)
    {
        $this->fileName = $fileName;
    }
    static function getInstance($fileName)
    {
        if(!isset(self::$instances[$fileName]))
        {
            self::$instances[$fileName] = new FileWrite($fileName);
        }
        return self::$instances[$fileName];   
    }
    
    function writeData($data)
    {
        echo "Writing Data to {$this->fileName}\n";
    }
    static function dump()
    {
        print_r(self::$instances);
    }
}

$fw  = FileWrite::getInstance("/tmp/abcd.txt");
$fw1 = FileWrite::getInstance("/tmp/abc.txt");
$fw2 = FileWrite::getInstance("/tmp/abc.txt");
$fw3 = FileWrite::getInstance("/tmp/abc.txt");

$fw->writeData("some data");
$fw1->writeData("some data");
$fw2->writeData("some data");
$fw3->writeData("some data");
FileWrite::dump();