<?php

namespace lesson_9;

class Example1
{

    const ACTION = 'Addition';
    public string $name = "Nikita";

    public function __construct()
    {
        echo "Hello world!";
    }

    public function sum(int $firstVariable, int $secondVariable): int
    {
//        Example1::ACTION;
//        self::ACTION;
        return $firstVariable + $secondVariable;
    }

}

$object = new Example1();

