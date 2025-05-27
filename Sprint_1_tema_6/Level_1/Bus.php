<?php
//Exercise 2 and 3
require_once 'Vehicle.php';
Class Bus extends Vehicle {
    public function __toString() {
        $message = "And me? What do you think baby? I'm a busssss \n";
        return $message;
    }
}
?>