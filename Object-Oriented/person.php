<?php
class Person {
    public $name;
    public function getName() {
        return $this->name;
        
    }
    public function setName($name) {
        $this->name = $name;
    }
    function sayGreetings(){
        if(date('G') < 12){
            $greetings = 'Good Morning';
            return $greetings;
        }
        elseif(date('G') < 17){
            $greetings = 'Good Afternoon';
            return $greetings;
        }
        else{
            $greetings = 'Good Evening';
            return $greetings;
        }
    }
}
$object = new Person();
$object->setName('Akash');
echo $object->getName().' '. $object->sayGreetings();