<?php

namespace lesson_10\Abstraction;

class Rectangle extends Figure
{

    private string $color;
    private float $firstSide;
    private float $secondSide;

    public function __construct(float $firstSide, float $secondSide, string $color)
    {
        $this->color = $color;
        $this->firstSide = $firstSide;
        $this->secondSide = $secondSide;
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

    public function getArea(): float
    {
        return $this->firstSide * $this->secondSide;
    }

    public function displayInfo()
    {
        print_r('Color rectangle ' . $this->color . ", area " . $this->getArea());
    }
}
