<?php
$foods = [
    'vegetables' => 'brinjal, brocolli, carrot, capsicam',
    'fruits' => 'orange, banana, apple',
    'drinks' => 'water, milk'
];
//$foods['drinks'] =  $foods['drinks'].", orange juice"; //asscositve array index add
$foods['drinks'] .= ", Orange juice";
//echo count($foods); // Array index count
foreach($foods as $key=>$value){
   // echo $key ." = ". $value."\n";
}

$keys = array_keys($foods);
$count = count($keys);
for($i=0;$i<$count;$i++){
    $key = $keys[$i];
    echo $key."\n";
    echo $foods[$key]."\n";
}

$values = array_values($foods);
$count = count($values);
for($i = 0; $i < $count; $i++){
    $value = $values[$i];
    echo $value;
}