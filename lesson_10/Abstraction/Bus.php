<?php

namespace lesson_10\Abstraction;

class Bus extends Transport
{

    public function __construct(bool $hasCash, bool $hasCard, string $city)
    {
        parent::__construct($hasCash, $hasCard, $city);
    }
    public function getAvailableCash(): bool
    {
        return true;
    }

    public function getAvailableCard(): bool
    {
        return false;
    }

    public function canPayDrive(): bool
    {
        if ($this->hasCash == $this->getAvailableCash()) {
            return true;
        }

        return false;
    }

    public function isAvailableDrive(): bool
    {
        $hours = date('G');
        if ($this->canPayDrive() && $hours < 23 && $hours > 5) {
            return true;
        }

        return false;
    }
}
