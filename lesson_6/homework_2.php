<?php

// поиск автомобильного номера Беларуси
// случай если 0000

$numbers = [
    '1645AB-1',
    'E002AA-5',
    '4KK4325'
];

$byRegex = '/[0-9]{4}[A-Za-z]{2}-[0-7]/i';
$electricRegex = '/E[0-9]{3}[A-Za-z]{2}-[0-7]/i';
$transitRegex = '/[0-9][A-Za-z]{2}[0-9]{4}/i';
foreach ($numbers as $number) {
    $isByNumber = preg_match($byRegex, $number);
    $isElectricNumber = preg_match($electricRegex, $number);
    $isTransitNumber = preg_match($transitRegex, $number);
    if ($isTransitNumber || $isByNumber || $isElectricNumber) {
        print_r('Work ' . $number . PHP_EOL);
    }
}
//
//$byNumbers = [
//    'BY1645AB-1',
//    'RU3434AB-3',
//    'BY34345AB-34',
//    'BY34556A34'
//];
//
//foreach ($byNumbers as $number) {
//    if (preg_match($byRegex, $number)) {
//        print_r('WORK!');
//    }
//}
