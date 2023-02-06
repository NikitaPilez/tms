<?php

class Rectangle implements Figure
{
    private float $firstSide;
    private float $secondSide;

    public function __construct(float $firstSide, float $secondSide)
    {
        $this->firstSide = $firstSide;
        $this->secondSide = $secondSide;
    }

    public function calculateArea(): float
    {
        return $this->firstSide * $this->secondSide;
    }

    public function displayInfo(?float $area): void
    {
        // TODO: Implement displayInfo() method.
    }
}
