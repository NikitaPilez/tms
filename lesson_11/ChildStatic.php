<?php

namespace lesson_11;

require_once "StaticClass.php";

class ChildStatic extends StaticClass
{
    public static string $variable = 'child';
    public function getStaticVariable()
    {
        return static::$variable;
//        return parent::$staticVariable;
    }

    public function showDiff()
    {
        return new self();
    }
}


//$object = new ChildStatic();
//print_r($object->getStaticVariable());
//print_r($object->showDiff());
