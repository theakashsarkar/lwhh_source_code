<?php
$person = [
    'name' => "Akash",
    'id'   => "some_id",
    'age'  => 18,
    'sex'  => "M"
];
function processMaternityLeave($person){
    if('18' == $person['age']){
        throw new GenderMismatchExecption('Too Yong');
    }
    elseif('F' == $person['sex']){
        echo "Processed";
    }else{
        throw new GenderMismatchExecption("Gender mismatch");
    }
}
class GenderMismatchExecption extends Exception{
    private $person;
   public function __construct($person){
        $this->person = $person;
        parent::__construct("Gender mismatch\n");
    }
    public function getMessageDetail()
    {
        echo "Gender mismatch with id{$this->person['id']}\n";
    }
}
try{
processMaternityLeave($person);
}catch(GenderMismatchExecption $e){
    echo $e->getMessage();
    echo $e->getMessageDetail();
}catch (Exception $e){
    echo "Other Exception";
}