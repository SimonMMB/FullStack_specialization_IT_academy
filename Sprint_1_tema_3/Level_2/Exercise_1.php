<?php
//ARRAYS DECLARATION
$array1 = [2, 3.7, 5.9, 6, 9, 23, 45, 56, 68, 82.3, 98];
$array2 = [2, 4.6, 5.9, 7, 9, 34.9, 64, 82.3, 91, 100];
$array3 = [0, 5.6, 7.8, 9, 23, 56, 57, 67.9, 82.3, 93, 95.6];
//FUNCTION
function analizeArrays(array $array1, array $array2) : string {
    $commonNumbers = array_intersect($array1, $array2);
    $mergedArray = array_merge($array1, $array2);
    $message = 'Common numbers are: ' . implode(', ', $commonNumbers) . PHP_EOL
                . 'Combinated array is: ' . implode(', ', $mergedArray) . PHP_EOL;
    return $message;
}
//EXECUTION
echo analizeArrays($array1, $array2);
echo analizeArrays($array1, $array3);
echo analizeArrays($array2, $array3);
?>