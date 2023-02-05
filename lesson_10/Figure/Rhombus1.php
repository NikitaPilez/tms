<?php

class Rhombus1
{
    private float $height;
    private float $firstSide;

    public function __construct(float $firstSide, float $height)
    {

        $this->height = $height;
        $this->firstSide = $firstSide;
    }

    public function getArea(): float
    {
        return $this->getHeight() * $this->getFirstSide();
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @param float $height
     */
    public function setHeight(float $height): void
    {
        $this->height = $height;
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