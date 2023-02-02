<?php

namespace lesson_9;

class Figure
{
    const TYPES = [
        'square',
        'rectangle',
        'trapezoid',
        'rhombus'
    ];

    private float $firstSide;
    private float $secondSide;
    private string $type;
    private float $height;

    public function __construct(string $type, float $firstSide, float $secondSide = 0, float $height = 0)
    {
        $this->type = $type;
        $this->firstSide = $firstSide;
        $this->secondSide = $secondSide;
        $this->height = $height;
    }

    public function getFirstSide(): float
    {
        return $this->firstSide;
    }

    public function setFirstSide(float $firstSide): void
    {
        $this->firstSide = $firstSide;
    }

    public function getSecondSide(): float
    {
        return $this->secondSide;
    }

    public function setSecondSide(float $secondSide): void
    {
        $this->secondSide = $secondSide;
    }

    public function getArea()
    {
        return match ($this->type) {
            'square' => pow($this->firstSide, 2),
            'rectangle' => $this->firstSide * $this->secondSide,
            'trapezoid' =>  0.5 * ($this->firstSide + $this->secondSide) * $this->height,
            'rhombus' =>  $this->firstSide * $this->height,
            default => null
        };
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function setHeight(float $height): void
    {
        $this->height = $height;
    }
}

$figure = new Figure("trapezoid", 10, 20, 5);
print_r($figure->getArea());
