<?php

namespace Traits;

class BSB extends Bank
{
    use Secure;
    public function __construct(string $cardName)
    {
        parent::__construct($cardName);
    }
}

$card = new BSB("new package");
$card->set3DSecureKey();
$card->setCardName();
