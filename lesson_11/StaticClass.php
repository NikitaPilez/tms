<?php

namespace lesson_11;

class StaticClass
{
    public static $staticVariable = 'static var';
    public static string $variable = 'parent';

    public static function displayInfo()
    {
//        print_r("Static method");
//        print_r(self::$staticVariable);
        print_r(static::$staticVariable);
    }

    public static function getStaticValue()
    {
        return self::$staticVariable;
    }
}

//StaticClass::displayInfo();
//print_r(StaticClass::$staticVariable);
