<?php

class Rhombus extends Figure
{
    public function __construct(float $firstSide, float $height)
    {
        parent::__construct(firstSide: $firstSide, height: $height);
    }

    public function getArea(): float
    {
        return $this->getHeight() * $this->getFirstSide();
    }
}