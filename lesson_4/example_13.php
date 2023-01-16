<?php

$string = 'Hello 34 fdgfdg 45 fg 55hhhg556';
$digits = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
$array = str_split($string);
$countDigits = 0;
$sum = 0;

$digitsCountFunc = function ($item) use ($digits, &$countDigits, &$sum) {
    if (in_array($item, $digits)) {
        $countDigits++;
        $sum += $item;
    }
};

array_map($digitsCountFunc, $array);

print_r('Количество ' . $countDigits . ' сумма ' . $sum);
