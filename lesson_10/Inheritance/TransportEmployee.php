<?php

namespace lesson_10\Inheritance;

class TransportEmployee extends Employee
{
    private string $type;

    public function __construct(string $name, string $company, string $type)
    {
        parent::__construct($name, $company);
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function displayInfo()
    {
        print_r("Name " . $this->name . " company " . $this->company . " type " . $this->type);
    }
}