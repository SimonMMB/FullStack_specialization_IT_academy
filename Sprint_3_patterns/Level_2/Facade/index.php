<?php

require_once 'src/AutomaticDishWasher.php';

//Dish wash without Facade

$collector = new Collector();
$soaper = new Soaper();
$rinser = new Rinser();
$drier = new Drier();
$collector->takeDirtyDish();
$soaper->applySoapToDish();
$rinser->rinseSoapedDish();
$drier->dryDish();

echo PHP_EOL;

//Dish wash with Facade

$automaticDishWasher = new AutomaticDishWasher();
$automaticDishWasher->washDirtyDish();

?>