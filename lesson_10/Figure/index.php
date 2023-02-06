<?php

require_once "Figure.php";
require_once "Square.php";
require_once "Rhombus.php";
require_once "Rectangle.php";

$square = new Square(2);
$area = $square->calculateArea();

$rhombus = new Rhombus(5, 2);
$area = $rhombus->calculateArea();

$rectangle = new Rectangle(5, 10);
$area = $rectangle->calculateArea();
