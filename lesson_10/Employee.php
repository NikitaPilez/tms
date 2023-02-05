<?php

namespace lesson_10;

class Employee extends Person
{

    public string $company;

    public function __construct(string $name, string $company)
    {
        parent::__construct($name);
        $this->company = $company;
    }


    public function displayInfo()
    {
        print_r("Name " . $this->name . " company " . $this->company);
    }
}