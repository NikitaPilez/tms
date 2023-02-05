<?php

namespace lesson_10\Inheritance;

class Square
{
    private string $sideLength;

    public function __construct(string $sideLength)
    {
        $this->sideLength = $sideLength;
    }

    /**
     * @return string
     */
    public function getSideLength(): string
    {
        return $this->sideLength;
    }

    /**
     * @param string $sideLength
     */
    public function setSideLength(string $sideLength): void
    {
        $this->sideLength = $sideLength;
    }

    public function displayInfo()
    {
        return "Side length " . $this->sideLength;
    }
}