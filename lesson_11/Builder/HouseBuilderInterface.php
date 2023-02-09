<?php

interface HouseBuilderInterface
{
    public function buildArea(int $area);

    public function buildMaterial(string $material);

    public function buildRoof(string $roof);
}
