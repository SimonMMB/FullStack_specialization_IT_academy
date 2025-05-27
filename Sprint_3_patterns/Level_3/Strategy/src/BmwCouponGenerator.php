<?php

require_once 'CarCouponGenerator.php';

class BmwCouponGenerator implements CarCouponGenerator
{
    public function addSeasonDiscount(): int
    {
        $isHighSeason = false;
        $discount = 0;
        if (!$isHighSeason) {
            $discount += 5;
        }
        
        return $discount;
    }

    public function addStockDiscount(): int
    {
        $bigStock = true;
        $discount = 0;
        if ($bigStock) {
            $discount += 7;
        }

        return $discount;
    }

    public function getTotalDiscount(): string
    {
        $discount = $this->addSeasonDiscount() + $this->addStockDiscount();
        $message = 'Get a ' . $discount . '% off the price of your new BMW!' . PHP_EOL;

        return $message;
    }
}

?>