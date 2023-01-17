<?php

$numberDecade = rand(0, 3);

$text = match ($numberDecade) {
    1 => 'Первая декада',
    2 => 'Вторая декада',
    3 => 'Третья декада',
    default => 'Не удалось определить декаду'
};

print_r($text);
//
//if ($numberDecade === 1) {
//    $text = 'Первая декада';
//} else if ($numberDecade === 2) {
//    $text = 'Вторая декада';
//} else if ($numberDecade === 3) {
//    $text = 'Третья декада';
//}
