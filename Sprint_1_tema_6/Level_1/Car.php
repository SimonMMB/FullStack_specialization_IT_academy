<?php
//Exercise 2 and 3
require_once 'Vehicle.php';
Class Car extends Vehicle {
    public function __toString() {
        $message = "Oh, I am a car... \n";
        return $message;
    }
}
?>