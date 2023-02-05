<?php

class Transport
{

    private bool $isAvailableCash;

    public function __construct()
    {
    }

    /**
     * @return bool
     */
    public function isAvailableCash(): bool
    {
        return $this->isAvailableCash;
    }

    /**
     * @param bool $isAvailableCash
     */
    public function setIsAvailableCash(bool $isAvailableCash): void
    {
        $this->isAvailableCash = $isAvailableCash;
    }
}