<?php

interface Figure
{

    public function calculateArea(): float;

    /**
     * @param float|null $area
     */
    public function displayInfo(?float $area): void;
}
