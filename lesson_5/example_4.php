<?php

$number = rand(1, 500);
print_r("На складе в наличии " . $number . " " . formattedWord($number, "миксер", "миксера", "миксеров") . "\n");

function formattedWord(int $number, string $formForOne, string $formForTwo, string $formForFive): string
{
    $num = abs($number) % 100;
    $num_x = $number % 10;

//    if ($num > 10 && $num < 20) {
//        return $formForFive;
//    } else if ($num_x > 1 && $num_x < 5) {
//        return $formForTwo;
//    } else if ($num_x == 1) {
//        return $formForOne;
//    } else {
//        return $formForFive;
//    }

    return match (true) {
        ($num > 10 && $num < 20) => $formForFive,
        ($num_x > 1 && $num_x < 5) => $formForTwo,
        ($num_x == 1) => $formForOne,
        default => $formForFive
    };
}
