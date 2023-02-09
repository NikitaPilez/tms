<?php

interface HouseBuilderInterface
{
    public function buildArea(int $area);

    public function buildMaterial(string $material);

    public function buildRoof(string $roof);

    public function buildGarage(bool $hasGarage);

    public function buildRoom(int $roomCount);

    public function buildFloor(int $floorCount);
}
