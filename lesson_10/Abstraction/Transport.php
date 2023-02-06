<?php

namespace lesson_10\Abstraction;
abstract class Transport
{

    public string $city;
    public bool $hasCash;
    public bool $hasCard;

    public function __construct(bool $hasCash, bool $hasCard, string $city)
    {
        $this->city = $city;
        $this->hasCash = $hasCash;
        $this->hasCard = $hasCard;
    }

    abstract public function canPayDrive(): bool;

    abstract public function getAvailableCash(): bool;
    abstract public function getAvailableCard(): bool;

    abstract public function isAvailableDrive(): bool;
}
