<?php
//ARRAY DECLARATION
$numbers = [3, 7, 12, 25, 8, 19, 4, 10, 6, 15, 21];
//FUNCTIONS
function determinePrime(int $number) : bool {
    $prime = true;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $prime = false;
            break;
        }
    }
    return $prime;
}
function sumJustPrimes(array $array) : int {
    $justPrimes = array_filter($array, function($n) {
        return determinePrime($n) == true;
    });
    $sumOfPrimes = array_reduce($justPrimes, function($acumulatedTotal, $value) {
        return $acumulatedTotal + $value;
    }, 0);
    return $sumOfPrimes;
}
//EXECUTION
echo 'Array: ' . implode(', ', $numbers) . PHP_EOL
    . 'Sum of prime numbers: ' . sumJustPrimes($numbers) . PHP_EOL;
?>