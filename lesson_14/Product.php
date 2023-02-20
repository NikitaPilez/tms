<?php

class Product
{


    private int $id;
    private string $name;
    private string $manufacturer;
    private int $count;
    private float $price;
    private string $currency;

    public function __construct(string $name, string $manufacturer, float $price, string $currency, ?int $count = 0)
    {
        $this->id = 1; // TODO
        $this->name = $name;
        $this->manufacturer = $manufacturer;
        $this->count = $count;
        $this->price = $price;
        $this->currency = $currency;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getManufacturer(): string
    {
        return $this->manufacturer;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
}
