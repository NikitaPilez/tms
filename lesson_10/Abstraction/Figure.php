<?php

namespace lesson_10\Abstraction;

abstract class Figure
{
    abstract public function getArea(): float;
    abstract public function displayInfo();
}
