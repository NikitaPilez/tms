<?php

//Реализовать функцию которая склоняет слово после числительного, в функцию нужно передать количество, и три формы слова (форм1,форм2,форм5)
//К примеру мы имеем интернет магазин по продаже бытовой техники, на сайте нужно вывести остаток, в наличии столько то "миксеров"
//К примеру "В наличии 1 миксер" "В наличии 2 миксера" "В наличии 5 миксеров"
//Я должен вызывать функцию `formattedWord(5, 'миксер', 'миксера', 'миксеров')` и на выходе функция возращает текст "миксеров" или "миксеров"

$number = rand(1, 500);
print_r("На складе в наличии " . $number . " " . formattedWord($number, "миксер", "миксера", "миксеров") . "\n");


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