<?php

require_once "HouseBuilderInterface.php";
require_once "HouseBuilder.php";
require_once "House.php";

$builder = new HouseBuilder();

$house = $builder->buildArea(15)
    ->buildRoom(5)
    ->buildGarage(false)
    ->buildFloor(2)
    ->buildMaterial("кирпич")
    ->buildRoof("треугольная")
    ->getHouse();

$houseClone = clone $house;

print_r($houseClone);



//$builder = new HouseBuilder();
//$director = new HouseDirector();
//$director->setBuilder($builder);
//$director->buildSmallHouse(100, "кирпич", "треугольная");
//print_r($builder->getHouse());
