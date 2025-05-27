<?php
require_once 'src/CouponApplier.php';
require_once 'src/CarCouponGenerator.php';
require_once 'src/BmwCouponGenerator.php';
require_once 'src/MercedesCouponGenerator.php';


/* 
Asuming that is high season and we have a big stock of both brands 
(even though Strategy Pattern allow us to set diferent states of these cirumstances for each brand independently) 
the calculation of discount is as follow:
*/

//Instantiation of coupon applier
$couponApplier = new CouponApplier();

//Discount for BMW
$bmwCouponGenerator = new BmwCouponGenerator();
$couponApplier->setStrategy($bmwCouponGenerator);
echo $couponApplier->getTotalDiscount() . PHP_EOL;

//Discount for Mercedes-Benz
$mercedesCouponGenerator = new MercedesCouponGenerator();
$couponApplier->setStrategy($mercedesCouponGenerator);
echo $couponApplier->getTotalDiscount() . PHP_EOL;

?>




