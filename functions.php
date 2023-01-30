<?php

function formattedWord(int $number, string $formForOne, string $formForTwo, string $formForFive): string
{
    $num = abs($number) % 100;
    $num_x = $number % 10;

    if ($num > 10 && $num < 20) {
        return $formForFive;
    } else if ($num_x > 1 && $num_x < 5) {
        return $formForTwo;
    } else if ($num_x == 1) {
        return $formForOne;
    } else {
        return $formForFive;
    }
}
