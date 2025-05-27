<?php
//Exercise 2 and 3
Class Vehicle {
    public function writeInfo() {
        $message = "Method: " . __FUNCTION__ . "\n"
                . "Object superclass: " . __CLASS__ . "\n"
                . "Object class: " . get_class($this) . "\n"
                . "File directory: " . __FILE__ . "\n\n";
        return $message;
    }
    public function __toString() {
        $message = "I am a generic vehicle. I could be either a car, a bike or a bus. \n";
        return $message;
    }
}
?>