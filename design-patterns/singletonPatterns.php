<?php
class SomeClass
{
    static $instance;
    public $name;
    function __construct($name)
    {
        $this->name = $name;
        echo "New instance create\n";
    }
    static function getInstance($name)
    {
        if(!self::$instance)
        {
            if($name)
            {
                self::$instance = new SomeClass($name);
            }else{
                self::$instance = new SomeClass('');
            }       
        }
        else{
            echo "Old instance supplide\n";
        }

        return self::$instance;
    }
    public function sayName()
    {
        echo $this->name;
    }
}
$sc1 = SomeClass::getInstance("Rahim");
$sc1 = SomeClass::getInstance("Karim");
$sc1 = SomeClass::getInstance("Akash");

$sc1->sayname();
$sc1->sayname();
$sc1->sayName();