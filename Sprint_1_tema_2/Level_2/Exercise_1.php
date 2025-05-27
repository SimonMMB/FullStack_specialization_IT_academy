<?php
//FUNCTIONS
function calculateFee(int $time) : float {
    $fee = 0;
    if ($time <= 3) {
        $fee = 0.1;
    } else {
        $extraTime = $time - 3;
        $fee = 0.1 + ($extraTime * 0.05);
    }
    return $fee;
}
function printCostOfCall(int $time) : string {
    if ($time <= 0) {
        $message = 'ERROR. Time must be greater than 0.' . PHP_EOL;
    } else {
        $message = 'Cost of call: ' . calculateFee($time) . ' euros' . PHP_EOL;
    }
    return $message;
}
//EXAMPLES
echo printCostOfCall(-1);
echo printCostOfCall(0);
echo printCostOfCall(3);
echo printCostOfCall(5);
echo printCostOfCall(10);
?>