<?php
interface BaseStroge{
    function setFileName($fn);
    function writeData($data);
    function setMode($mode);
}
class Stroge implements BaseStroge{
    private $fn;
    private $mode;
    public function __construct($fn, $mode=null)
    {
        $this->setFileName($fn);
        $this->setMode($mode);
        
    }
    public function setFileName($fn)
    {
        $this->fn = $fn;
    }
    public function writeData($data):void
    {
        file_put_contents($this->fn, $data, $this->mode);
    }
    public function setMode($mode){
        $this->mode = $mode;
    }
}
// class DataManager{
//     public function saveData($fileName,$data){
//         $st = new Stroge($fileName);
//         $st->writeData($data);
//     }
// }
class DataManager{
    public function saveData(BaseStroge $stroge, $data){
        $stroge->writeData($data);
    }
}
$file = new Stroge("/tmp/abcd.txt");
$file->setMode(FILE_APPEND);
$dm = new DataManager();
$dm->saveData($file," 5 Hello Akash");