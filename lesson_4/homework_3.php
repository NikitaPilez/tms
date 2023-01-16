<?php

$fileName = 'test.jpg';
$allowedFormats = ['svg', 'jpeg', 'jpg', 'svg'];
$explodeString = explode('.', $fileName);
$format = $explodeString[1];

if (in_array($format, $allowedFormats)) {
    print_r('Формат валидный');
} else {
    print_r('Не подходящий формат');
}
