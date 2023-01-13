<?php

// Определить является ли год високосным с помощью функций пхп.

$year = $argv[1];

if (isLean($year)) {
    print_r($year . ' високосный');
} else {
    print_r($year . ' не високосный');
}

function isLean(int $year): bool
{
    if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}


