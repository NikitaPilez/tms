<?php

class HouseBuilder implements HouseBuilderInterface
{

    private House $house;

    public function __construct()
    {
        $this->reset();
    }

    public function reset()
    {
        $this->house = new House();
    }

    public function getHouse(): House
    {
        $result = $this->house;
        $this->reset();

        return $result;
    }

    public function buildArea(int $area)
    {
        if ($area <= 100) {
            $this->house->area = $area;
            print_r("Вы выбрали площадь " . $area . " м2" . PHP_EOL);
        } else {
            print_r("Площадь участка может составлять до 100 м2" . PHP_EOL);
        }

        return $this;
    }

    public function buildMaterial(string $material)
    {
        $this->house->material = $material;
        print_r("Вы выбрали материал дома: " . $material . PHP_EOL);
        return $this;
    }

    public function buildRoof(string $roof)
    {
        $this->house->roof = $roof;
        print_r("Вы выбрали тип крыши: " . $roof . PHP_EOL);
        return $this;
    }
}
