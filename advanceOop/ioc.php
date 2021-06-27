<?php
interface Student {
    function display();
}
class ImproveStudent implements Student {
    private $name, $title;
    public function __construct($name, $title)
    {
        $this->name  = $name;
        $this->title = $title;
    }
    public function display()
    {
        echo "Hello From {$this->title} {$this->name}";
    }
}
class Students implements Student {
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    function display(){
        echo "Hello From ".$this->name;
    }
}

// class StudentManger {
//     public function introduceStudent($name)
//     {
//         $st = new Students($name);
//         $st->display();
//     }
// }
class StudentManger {
    public function introduceStudent(Student $name)
    {
        $name->display();
    }
}
$is = new ImproveStudent("Akash", "ki mama");
$st = new Students("akash");
$sm = new StudentManger();
$sm->introduceStudent($is);