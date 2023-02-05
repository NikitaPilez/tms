<?php

namespace lesson_10\Inheritance;

class Employee1
{

    public string $company;
    private string $name;

    public function __construct(string $name, string $company)
    {
        $this->company = $company;
        $this->name = $name;
    }


    public function displayInfo()
    {
        print_r("Name " . $this->name . " company " . $this->company);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * @param string $company
     */
    public function setCompany(string $company): void
    {
        $this->company = $company;
    }
}