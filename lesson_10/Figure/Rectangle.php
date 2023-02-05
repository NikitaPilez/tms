<?php

class Rectangle extends Square
{
    public function __construct(float $firstSide, float $secondSide)
    {
        parent::__construct(firstSide: $firstSide, secondSide: $secondSide);
    }

    public function calculateArea(): void
    {
        $this->setArea($this->getFirstSide() * $this->getSecondSide());
    }
}