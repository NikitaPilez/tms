<?php

use lesson_10\Abstraction\Bus;
use lesson_10\Abstraction\CarSharing;
use lesson_10\Abstraction\Taxi;

require_once "Transport.php";
require_once "Bus.php";
require_once "CarSharing.php";
require_once "Taxi.php";

$bus = new Bus(true, true, "Minsk");
print_r($bus->isAvailableDrive());

$carSharing = new CarSharing(false, true, "Minsk");
print_r($carSharing->isAvailableDrive());

$taxi = new Taxi(true, false, "Minsk");
print_r($taxi->isAvailableDrive());
