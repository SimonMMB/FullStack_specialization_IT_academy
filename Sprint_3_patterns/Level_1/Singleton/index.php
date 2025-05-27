<?php
require_once 'src/Tigger.php';

//1- Instantiate the one and only Tigger

$tigger = Tigger::getInstance();

//2- Make him roar 5 times

for ($i = 0; $i < 5; $i++) {
    $tigger->roar() . PHP_EOL;
}

//3- Show the counter
echo 'Tigger roared ' . $tigger->getCounter() . ' times' . PHP_EOL;

?>