<?php
//FUNCTION
function determinePrimeNumbers(int $number) : string {
    $message = '';
    //Input control
    if ($number < 2) {
        $message = 'ERROR. Number must be equal or greater than 2' . PHP_EOL;
    } else {
        //List of total numbers between 2 and $number (both included)
        $primeNumbers = [];
        for ($i = 2; $i <= $number; $i++) {
            $primeNumbers[] = $i;
        }
        //Deleting non-prime numbers from list
        for ($i = 2; $i <= sqrt($number); $i++) {
            for ($j = $i; $j <= ($number/$i); $j++) {
                $noPrime = $i * $j;
                $key = array_search($noPrime, $primeNumbers);
                if ($key != false) {
                    unset($primeNumbers[$key]);
                }
            }
        }
        //Output message 
        $message = 'Prime numbers between 2 and ' . $number . ': ' . implode(', ', $primeNumbers) . PHP_EOL;
    }
    return $message;
}
//EXAMPLES
echo (determinePrimeNumbers(-2));
echo (determinePrimeNumbers(0));
echo (determinePrimeNumbers(1));
echo (determinePrimeNumbers(20));
echo (determinePrimeNumbers(50));
echo (determinePrimeNumbers(100));
?>