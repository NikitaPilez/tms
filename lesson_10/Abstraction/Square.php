<?php

namespace lesson_10\Abstraction;

class Square extends Figure
{

    private float $sideLength;
    private string $color;

    public function __construct(float $sideLength, string $color)
    {
        $this->sideLength = $sideLength;
        $this->color = $color;
    }

    /**
     * @return float
     */
    public function getSideLength(): float
    {
        return $this->sideLength;
    }

    /**
     * @param float $sideLength
     */
    public function setSideLength(float $sideLength): void
    {
        $this->sideLength = $sideLength;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getArea(): float
    {
        return pow($this->sideLength, 2);
    }

    public function displayInfo()
    {
        print_r('Color square ' . $this->color . ", area " . $this->getArea());
    }
}
