<?php

require_once 'CarCouponGenerator.php';
require_once 'BmwCuoponGenerator.php';
require_once 'MercedesCuoponGenerator.php';

class CouponApplier
{
    private CarCouponGenerator $carCouponGenerator;

    public function setStrategy(CarCouponGenerator $carCouponGenerator)
    {
        $this->carCouponGenerator = $carCouponGenerator;
    }

    public function getTotalDiscount(): string
    {
        return $this->carCouponGenerator->getTotalDiscount();
    }
}

?>