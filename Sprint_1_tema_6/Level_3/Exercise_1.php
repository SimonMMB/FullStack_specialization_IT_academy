<?php

//Enabling use of libraries 
require 'vendor/autoload.php';
use Carbon\Carbon;
use Cmixin\BusinessDay;
use Cmixin\BusinessTime;

//Defining Sprints start dates
$startSprint2 = Carbon::create(2024, 12, 19); //The day I opened Sprint 2
//Defining winter holidays
$startWinterVacations = Carbon::create(2024, 12, 23);
$endWinterVacations = Carbon::create(2025, 01, 10);
$winterHolidays = [];
$currentDay = $startWinterVacations->copy();
while ($currentDay->lte($endWinterVacations)) {
    $winterHolidays[] = $currentDay->toDateString();
    $currentDay->addDay();
}

foreach($winterHolidays as $holiday) {
    echo $holiday . PHP_EOL;
}

BusinessDay::enable(Carbon::class, [
    'region' => 'es',
    'holidays' => $winterHolidays
]);
$date = Carbon::create(2025, 01, 8);

echo $date->toDateString() . PHP_EOL;

echo $date->isBusinessDay() ? 'Laboral' : 'Festivo loco' . PHP_EOL; 

/*
$holyFriday = Carbon::create(2025, 04, 18);
$easterMonday = Carbon::create(2025, 04, 21);
$workersDay = Carbon::create(2025, 05, 1);
$otherHolidays = [$holyFriday, $easterMonday, $workersDay];
*/








