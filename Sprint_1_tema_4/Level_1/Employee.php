<?php
declare(strict_types = 1);
//Exercise 1
class Employee {
    private string $name;
    private float $salary;
    public function __construct(string $name, float $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }
    public static function initialize(string $name, float $salary) : Employee {
        $newEmployee = new Employee($name, $salary);
        return $newEmployee;
    }
    public function print() : string {
        if ($this->salary > 6000) {
            $message = $this->name . " must pay taxes. \n";
        } else {
            $message = $this->name . " is tax exempt. \n";
        }
        return $message;
    }
}
?>