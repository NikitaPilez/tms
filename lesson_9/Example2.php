<?php

namespace lesson_9;

class Example2
{

    public string $firstVariable = "public";
    private string $secondVariable = "private";

    protected string $thirdVariable = "protected";

    public function firstFunction()
    {
        return "firstFunction";
    }

    private function secondFunction()
    {
        return "secondFunction";

    }

    protected function thirdFunction()
    {
        return "thirdFunction";
    }


}

$object = new Example2();
print_r($object->firstVariable); // work
print_r($object->firstFunction()); // work
//print_r($object->secondVariable); // private
//print_r($object->secondFunction()); // private
//print_r($object->thirdVariable); // private
//print_r($object->thirdFunction()); // private
