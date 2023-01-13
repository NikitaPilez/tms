<?php

// Напишите функцию, которая проверяет является ли число четным или нет и возвращает результат.

$number = rand(1,1000);

if (isEven($number)) {
    print_r($number . ' четное');
} else {
    print_r($number . ' не четное');
}

function isEven(int $number): bool
{
    return $number % 2 === 0;
}
