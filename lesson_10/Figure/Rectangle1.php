<?php

class Rectangle1
{
    private float $firstSide;
    private float $secondSide;

    public function __construct(float $firstSide, float $secondSide)
    {

        $this->firstSide = $firstSide;
        $this->secondSide = $secondSide;
    }

    public function getArea(): float
    {
        return $this->getFirstSide() * $this->getSecondSide();
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

    /**
     * @return float
     */
    public function getSecondSide(): float
    {
        return $this->secondSide;
    }

    /**
     * @param float $secondSide
     */
    public function setSecondSide(float $secondSide): void
    {
        $this->secondSide = $secondSide;
    }
}