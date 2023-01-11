<?php

// Задание, реализовать функцию целочисленного деления без intdiv.

print_r(ceilNumber(6, 2));

function ceilNumber($a, $b)
{
    $result = $a / $b;

    if (is_int($result)) {
        return $result;
    } else {
        $result = (int) $result;
        return $result;
    }
}
