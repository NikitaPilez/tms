<?php

namespace lesson_10\Inheritance;

class Person
{

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function displayInfo()
    {
        print_r('Name ' . $this->name);
    }
}