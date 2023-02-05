<?php

namespace lesson_10\Inheritance;

class ColorSquare extends Square
{
    private string $color;

    public function __construct(float $firstSide, string $color)
    {
        parent::__construct($firstSide);
        $this->color = $color;
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

    public function displayInfo()
    {
        return "Side length " . $this->getSideLength() . " color " . $this->color;
    }
}