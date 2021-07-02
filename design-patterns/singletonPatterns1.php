<?php
class FileWrite
{
    static $instance;
    private $fileName;

    function __construct($fileName)
    {
        $this->fileName = $fileName;
    }
    static function getInstance($fileName)
    {
        if(!self::$instance)
        {
           if($fileName)
           {
            self::$instance = new FileWrite($fileName);
           }
        }
        return self::$instance;   
    }
    
    function writeData($data)
    {
        echo "Writing Data to {$this->fileName}\n";
    }
}

$fw  = FileWrite::getInstance("/tmp/abcd.txt");
$fw1 = FileWrite::getInstance("/tmp/abc.txt");
$fw2 = FileWrite::getInstance("/tmp/abc.txt");

$fw->writeData("some data");
$fw->writeData("some data");
$fw->writeData("some data");