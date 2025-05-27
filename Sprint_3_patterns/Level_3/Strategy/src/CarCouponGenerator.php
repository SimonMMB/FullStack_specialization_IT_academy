<?php

interface CarCouponGenerator
{
    public function addSeasonDiscount(): int;

    public function addStockDiscount(): int;

    public function getTotalDiscount(): string;
}

?>