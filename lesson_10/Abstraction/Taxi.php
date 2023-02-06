<?php

namespace lesson_10\Abstraction;

class Taxi extends Transport
{

    public function __construct(bool $hasCash, bool $hasCard, string $city)
    {
        parent::__construct($hasCash, $hasCard, $city);
    }

    public function canPayDrive(): bool
    {
        if (($this->hasCard == $this->getAvailableCard()) || ($this->hasCash == $this->getAvailableCash())) {
            return true;
        }

        return false;
    }

    public function getAvailableCash(): bool
    {
        return true;
    }

    public function getAvailableCard(): bool
    {
        return true;
    }

    public function isAvailableDrive(): bool
    {
        if ($this->canPayDrive() && in_array($this->city, $this->getAvailableCities())) {
            return true;
        }

        return false;
    }

    private function getAvailableCities()
    {
        return [
            "Minsk",
            "Gomel",
            "Brest",
            "Vitebsk",
            "Mogilew",
            "Grodno"
        ];
    }
}
