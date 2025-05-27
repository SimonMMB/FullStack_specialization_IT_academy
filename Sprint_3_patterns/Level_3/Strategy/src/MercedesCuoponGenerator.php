<?php

require_once 'CarCouponGenerator.php';

class MercedesCouponGenerator implements CarCouponGenerator
{
    public function addSeasonDiscount(): int
    {
        $isHighSeason = false;
        $discount = 0;
        if (!$isHighSeason) {
            $discount += 4;
        }

        return $discount;
    }

    public function addStockDiscount(): int
    {
        $bigStock = true;
        $discount = 0;
        if ($bigStock) {
            $discount += 10;
        }

        return $discount;
    }

    public function getTotalDiscount(): string
    {
        $discount = $this->addSeasonDiscount() + $this->addStockDiscount();
        $message = 'Get a ' . $discount . '% off the price of your new Mercedes!' . PHP_EOL;

        return $message;
    }
}

?>