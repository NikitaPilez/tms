<?php

class Square implements Figure
{
    private float $firstSide;

    public function __construct(float $firstSide)
    {

        $this->firstSide = $firstSide;
    }

    public function calculateArea(): float
    {
        return pow($this->firstSide, 2);
    }

    public function displayInfo(?float $area): void
    {
        // TODO: Implement displayInfo() method.
    }
}
