<?php
require_once 'Car.php';
require_once 'Bike.php';
require_once 'Bus.php';
$newVehicle = new Vehicle();
$newBike = new Bike();
$newCar = new Car();
$newBus = new Bus();

//Exercise 2
$vehicleContent = $newVehicle->writeInfo();
$bikeContent = $newBike->writeInfo();
$carContent = $newCar->writeInfo();
$busContent = $newBus->writeInfo();
$file = 'exercise2.txt';
$titleEx2 = "EXERCISE 2 - Information about objects given by magic constants \n\n";
$totalContent1 = $titleEx2 . $vehicleContent . $bikeContent . $carContent . $busContent;
file_put_contents($file, $totalContent1);

//Exercise 3: __toString() overridings
echo $newVehicle;
echo $newBike;
echo $newCar;
echo $newBus;
?>