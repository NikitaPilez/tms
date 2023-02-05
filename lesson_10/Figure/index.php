<?php

require_once "Figure.php";
require_once "Square.php";
require_once "Rhombus.php";
require_once "Rectangle.php";

$square = new Square(2);
$square->calculateArea();
print_r($square->getArea());

$rhombus = new Rhombus(5, 2);
$rhombus->calculateArea();
print_r($rhombus->getArea());

$rectangle = new Rectangle(5, 10);
$rectangle->calculateArea();
print_r($rectangle->getArea());