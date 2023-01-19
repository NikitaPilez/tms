<?php

// first task
// 1
$nameOfSite = 'https://google.com';

if (str_starts_with($nameOfSite, 'https')){
    print_r('Сайт защищён!');
} else {
    print_r('Сайт не защищён!');
}

// 2
str_contains($nameOfSite, 'https://') ? "Ваш веб сайт защищен" : "Сайт не защищен";


// second task

// 1
$string = 'jh4k k9dhj3j4j6 kj3dij9m 3j5k7';
$symbolArray = str_split($string);
$digits = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
$k = array_intersect($symbolArray, $digits);
$arrSum = array_sum($k);
print_r('Цифры найдены' . ' ' . count($k) . ' раз.' ."\n");
print_r('Сумма цифр -' . ' ' . $arrSum . '.');

// 2
$symbols = str_split($string);
$filter= array_filter($symbols, 'is_numeric');
$sum = array_sum($filter);
$count = count($filter);
print_r("Сумма чисел: {$sum}\n");
print_r("Количество: {$count}");

// third task
// strrchr - последнее вхождение символа в строке

// 1
$arrayList = ['.jpg', '.jpeg', '.png', '.svg'];
$string = readline('');
$newString = strrchr($string, '.');
valid($newString, $arrayList);
function valid($newString, $arrayList){
    if (in_array($newString, $arrayList)) {
        echo 'Изображение валидное!';
    } else {
        echo 'Ошибка';
    }
}

// 2
$arr = array(
    0 => ".jpg",
    1 => ".jpeg",
    2 =>".svg",
);

if($string == $arr[0] || $string == $arr[1] || $string == $arr[2]) {

}

