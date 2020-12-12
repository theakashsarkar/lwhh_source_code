<?php
$foods = [
    'vegetables' => explode(', ', 'brinjal, brocolli, carrot, capsicam'),
    'fruits' => explode(', ', 'orange, banana, apple'),
    'drinks' => explode(', ', 'water, milk'),
];
//print_r($foods);
array_push($foods['drinks'],'orange juice');
print_r($foods);
echo PHP_EOL;
echo $foods['vegetables'][3];
echo PHP_EOL;

$simple = [
    'test' => [
        'test-again' => [
            'a',
            'b',
            'c',
            'd'
        ]
    ],
];
echo $simple['test']['test-again'][0];
echo PHP_EOL;

$simple2 = [
    [1, 2, 3, 4],
    [11, 22, 33, 44],
    [111, 222, 333, 444],
    [1111, 2222, 3333, 4444,[5, 6, 7]],
];
echo $simple2[3][4][1];
echo PHP_EOL;