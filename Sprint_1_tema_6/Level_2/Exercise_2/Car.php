<?php
trait Turbo {
    public function boost() {
        echo 'Turbo has started';
    }
}
class Car {
    use Turbo;

    private string $brand;
    private string $licensePlate;
    private string $fuelType;
    private int $maxSpeed;

    public function __construct(string $brand, string $licensePlate, string $fuelType, int $maxSpeed) {
        $this->brand = $brand;
        $this->licensePlate = $licensePlate;
        $this->fuelType = $fuelType;
        $this->maxSpeed = $maxSpeed;
    }
    public function getBrand() : string {
        return $this->brand;
    }
    public function getLicensePlate() : string {
        return $this->licensePlate;
    }
    public function getFuelType() : string {
        return $this->fuelType;
    }
    public function getMaxSpeed() : int {
        return $this->maxSpeed;
    }
    public function setBrand(string $brand) : void {
        $this->brand = $brand;
    }
    public function setLicensePlate(string $licensePlate) : void {
        $this->licensePlate = $licensePlate;
    }
    public function setFuelType(string $fuelType) : void {
        $this->fuelType = $fuelType;
    }
    public function setMaxSpeed(int $maxSpeed) : void {
        $this->maxSpeed = $maxSpeed;
    }
}