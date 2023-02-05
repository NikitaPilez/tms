<?php

class Figure
{
    private float $firstSide;
    private ?float $secondSide;
    private ?float $height;

    private ?float $area;

    public function __construct(float $firstSide, ?float $secondSide = null, ?float $height = null)
    {
        $this->firstSide = $firstSide;
        $this->secondSide = $secondSide;
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

    /**
     * @return float|null
     */
    public function getSecondSide(): ?float
    {
        return $this->secondSide;
    }

    /**
     * @param float|null $secondSide
     */
    public function setSecondSide(?float $secondSide): void
    {
        $this->secondSide = $secondSide;
    }

    /**
     * @return float|null
     */
    public function getHeight(): ?float
    {
        return $this->height;
    }

    /**
     * @param float|null $height
     */
    public function setHeight(?float $height): void
    {
        $this->height = $height;
    }

    public function getArea(): ?float
    {
        return $this->area;
    }

    /**
     * @param float|null $area
     */
    public function setArea(?float $area): void
    {
        $this->area = $area;
    }
}