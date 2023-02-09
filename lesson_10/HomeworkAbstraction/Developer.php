<?php

class Developer extends People
{
    public function greeting()
    {
        print_r("Hello world! My name is " . $this->getName() . " , I'm " . $this->getPosition());
    }
}
