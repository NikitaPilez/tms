<?php

class Rhombus implements Figure
{
    private float $firstSide;
    private float $height;

    public function __construct(float $firstSide, float $height)
    {

        $this->firstSide = $firstSide;
        $this->height = $height;
    }

    public function calculateArea(): float
    {
        return $this->height * $this->firstSide;
    }

    public function displayInfo(?float $area): void
    {
        // TODO: Implement displayInfo() method.
    }
}
