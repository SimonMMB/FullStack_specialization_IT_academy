<?php
//Exercise 2 and 3
require_once 'Vehicle.php';
Class Bike extends Vehicle {
    public function __toString() {
        $message = "Me? I am a bike! \n";
        return $message;
    }
}
?>