<?php

namespace Interfaces;

class Telegram implements Messenger
{

    public function send(string $text)
    {
        print_r("Send to telegram " . $text);
    }
}
