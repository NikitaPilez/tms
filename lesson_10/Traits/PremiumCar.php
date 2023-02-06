<?php

trait PremiumCar
{
    private int $leatherSeats;

    private bool $isToning;

    /**
     * @return int
     */
    public function getLeatherSeats(): int
    {
        return $this->leatherSeats;
    }

    /**
     * @param int $leatherSeats
     */
    public function setLeatherSeats(int $leatherSeats): void
    {
        $this->leatherSeats = $leatherSeats;
    }

    /**
     * @return bool
     */
    public function isToning(): bool
    {
        return $this->isToning;
    }

    /**
     * @param bool $isToning
     */
    public function setIsToning(bool $isToning): void
    {
        $this->isToning = $isToning;
    }


}
