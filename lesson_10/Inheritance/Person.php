<?php

namespace lesson_10\Inheritance;

class Person
{

    public string $name;
    public int $age;


    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function displayInfo()
    {
        print_r('Name ' . $this->name . " age - " . $this->age);
    }
}