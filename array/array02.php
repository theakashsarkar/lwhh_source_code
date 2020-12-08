<?php
$students = [
    "rahim",
    "karim",
    "monir",
    123,
];
/*
 * php array built in function implement
 */
$student = array_shift($students);
$student = array_pop($students);
/*
 * Two way array new array index create
 */
$students[] = "kamal"; // index create first way
array_push($students, 'molla mama');// second way array built in function
/*
 * array first index data push php build in function
 */
array_unshift($students, 'tashine');
$n = count($students);
for ($i = 0; $i < $n; $i++)
{
    echo $students[$i]."\n";
}
