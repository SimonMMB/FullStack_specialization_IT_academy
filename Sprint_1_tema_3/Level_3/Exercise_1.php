<?php
//ARRAYS DECLARATION
$array1 = [2, 3.7, 5.9, 6, 9, 23, 45, 56, 68, 82.3, 98];
$array2 = [2, 4.6, 5.9, 7, 9, 34.9, 64, 82.3, 91, 100];
$array3 = [0, 5.6, 7.8, 9, 23, 56, 57, 67.9, 82.3, 93, 95.6];
//FUNCTIONS
function calculateCubes(array $array) : array {
    $cubes = array_map(function($n) {
        return $n ** 3;
    }, $array);
    return $cubes;
}
function printCubes(array $array) : string {
    $message = '';
    $cubes = calculateCubes($array);
    for ($i = 0; $i < count($array); $i++) {
        $message .= 'Number: ' . $array[$i] . ' | Cube: ' . $cubes[$i] . PHP_EOL;
    }
    return $message;
}
//EXECUTION
echo 'Array 1 cubes: ' . PHP_EOL 
    . (printCubes($array1)) . PHP_EOL;
echo 'Array 2 cubes: ' . PHP_EOL 
    . (printCubes($array2)) . PHP_EOL;
echo 'Array 3 cubes: ' . PHP_EOL 
    . (printCubes($array3)) . PHP_EOL;
?>