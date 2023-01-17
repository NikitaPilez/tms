<?php

$month = rand(1, 12);

if (($month >= 1 && $month <= 2) || ($month === 12)) {
    $answer = 'Зима';
} else if ($month >= 3 && $month <= 5) {
    $answer = 'Весна';
} else if ($month >= 6 && $month <= 8) {
    $answer = 'Лето';
} else if ($month >= 9 && $month <= 11) {
    $answer = 'Осень';
} else {
    $answer = 'Не удалось определить пору года';
}
//
//$answer = match (true) {
//    ($month >= 1 && $month <= 2) || ($month === 12) => 'Зима',
//    $month >= 3 && $month <= 5 => 'Весна',
//    $month >= 6 && $month <= 8 => 'Лето',
//    $month >= 9 && $month <= 11 => 'Осень',
//    default => 'Не удалось определить пору года'
//};

print_r('Номер месяца ' . $month . ', пора года - ' . $answer);
