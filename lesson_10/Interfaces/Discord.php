<?php

namespace Interfaces;

class Discord implements Messenger
{

    public function send(string $text)
    {
        print_r("Send to discord " . $text);
    }
}
