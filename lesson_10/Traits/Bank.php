<?php

namespace Traits;

class Bank
{


    private string $cardName;

    public function __construct(string $cardName)
    {
        $this->cardName = $cardName;
    }

    /**
     * @return string
     */
    public function getCardName(): string
    {
        return $this->cardName;
    }

    /**
     * @param string $cardName
     */
    public function setCardName(string $cardName): void
    {
        $this->cardName = $cardName;
    }

}
