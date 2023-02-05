<?php

class Rectangle extends Figure
{
    public function __construct(float $firstSide, float $secondSide)
    {
        parent::__construct(firstSide: $firstSide, secondSide: $secondSide);
    }

    public function getArea(): float
    {
        return $this->getFirstSide() * $this->getSecondSide();
    }
}