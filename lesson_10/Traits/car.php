<?php
require_once("Car.php");
require_once("SportCar.php");
require_once("PremiumCar.php");
require_once("Mercedes.php");

$car = new Mercedes("CLS", "Black");
$car->setPower(350);
$car->setIsToning(true);
print_r($car->getInformation());
