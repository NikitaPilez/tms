<?php

class Square extends Figure
{
    public function __construct(float $firstSide)
    {
        parent::__construct($firstSide);
    }

    public function calculateArea(): void
    {
        $this->setArea(pow($this->getFirstSide(), 2));
    }
}