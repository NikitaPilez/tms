<?php

namespace lesson_10\Encapsulation;

class Remote
{

    private int $numberChannel;

    public function __construct(int $numberChannel)
    {
        $this->numberChannel = $numberChannel;
    }


    public function changeChannel(int $number)
    {
        // check subscription
        $this->numberChannel = $number;
    }

    /**
     * @return int
     */
    public function getNumberChannel(): int
    {
        return $this->numberChannel;
    }
}

$remote = new Remote(5);
$remote->changeChannel(2);