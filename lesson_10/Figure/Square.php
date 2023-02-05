<?php

class Square extends Figure
{
    public function __construct(float $firstSide)
    {
        parent::__construct($firstSide);
    }

    public function getArea(): float
    {
        return pow($this->getFirstSide(), 2);
    }
}