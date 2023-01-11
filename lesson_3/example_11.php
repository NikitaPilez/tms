<?php

// Задание, написать калькулятор с базовыми действиями, сложение, вычитание, умножение, деление, возведение в степень. (11)

print_r(module(-5));

function module($number)
{
    if ($number >= 0) {
        return $number;
    } else {
        $result = 0 - $number;
        return $result;
    }
}
