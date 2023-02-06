<?php

namespace lesson_10\Abstraction;

class CarSharing extends Transport
{

    public function __construct(bool $hasCash, bool $hasCard, string $city)
    {
        parent::__construct($hasCash, $hasCard, $city);
    }

    public function canPayDrive(): bool
    {
        if ($this->hasCard == $this->getAvailableCard()) {
            return true;
        }

        return false;
    }

    public function getAvailableCash(): bool
    {
        return false;
    }

    public function getAvailableCard(): bool
    {
        return true;
    }

    public function isAvailableDrive(): bool
    {
        if ($this->city == "Minsk" && $this->hasCard) {
            return true;
        }

        return false;
    }
}
