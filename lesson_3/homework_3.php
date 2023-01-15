<?php

// Задание, магазин работает по будням с 9 - 21, по выходным не работает, ввести дату и определить сколько времени осталось до открытия или закрытия или он вовсе не работает.

$date = date('d.m.Y H:i', $argv[1]);

$dayInWeek = date('w', $date);
$hours = date('H', $date);
print_r($hours);

if ($dayInWeek == 0 || $dayInWeek == 6) {
    print_r('Магазин выходной');
} else if ($hours < 9) {
    print_r('Магазин еще не открылся');
} else if ($hours > 21) {
    print_r('Магазин уже закрылся');
} else {
    print_r('Магазин открыт');
}