<?php

namespace lesson_10\Inheritance;

class Employee extends Person
{

    public string $company;

    public function __construct(string $name, int $age, string $company)
    {
        parent::__construct($name, $age);
        $this->company = $company;
    }


    public function displayInfo()
    {
        print_r("Name " . $this->name . " age " . $this->age .  " company " . $this->company);
    }
}