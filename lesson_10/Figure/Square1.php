<?php

class Square1
{
    private float $firstSide;

    public function __construct(float $firstSide)
    {

        $this->firstSide = $firstSide;
    }

    public function getArea(): float
    {
        return pow($this->getFirstSide(), 2);
    }

    /**
     * @return float
     */
    public function getFirstSide(): float
    {
        return $this->firstSide;
    }

    /**
     * @param float $firstSide
     */
    public function setFirstSide(float $firstSide): void
    {
        $this->firstSide = $firstSide;
    }
}