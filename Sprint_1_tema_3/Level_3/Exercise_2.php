<?php
//ARRAYS DECLARATION
$array1 = ['coche', 'moto', 'furgoneta', 'triciclo', 'patinete', 'camión', 'bicicleta', 'lancha'];
$array2 = ['gnochi', 'ravioli', 'spaghetti', 'malfatti', 'stracciatella', 'limoncello', 'amatriciana', 'penne rigate'];
$array3 = ['provenza', 'mallorca', 'valencia', 'arago', 'consell de cent', 'diputacio', 'gran via', 'sepulveda'];
//FUNCTION
function selectEvenStrings(array $array) : array {
    $evenStrings = array_filter($array, function($n) {
            return strlen($n) % 2 == 0;
    });
    return $evenStrings;
}
//EXECUTION
echo 'Even strings from array 1: ' . implode(', ', selectEvenStrings($array1)) . PHP_EOL;
echo 'Even strings from array 2: ' . implode(', ', selectEvenStrings($array2)) . PHP_EOL;
echo 'Even strings from array 3: ' . implode(', ', selectEvenStrings($array3)) . PHP_EOL;
?>