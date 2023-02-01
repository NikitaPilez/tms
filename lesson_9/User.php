<?php

namespace lesson_9;

class User
{
    private string $name;

    private int $age;

//    public function __construct(string $name, int $age)
//    {
//        $this->name = $name;
//        $this->age = $age;
//    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

}

$people = new User();
//$people = new User("Alex", 15);
$people->setName("Alex");
$people->setAge(40);
print_r($people->getAge());
