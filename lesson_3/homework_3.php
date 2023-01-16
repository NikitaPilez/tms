<?php

// Задание, магазин работает по будням с 9 - 21, по выходным не работает, ввести дату и определить сколько времени осталось до открытия или закрытия или он вовсе не работает.

$date = $argv[1];
$time = $argv[2];
showWorkTime($date, $time);

function showWorkTime(string $date, string $time)
{
    $timestampDate = strtotime($date);
    $timestampTime = strtotime($time);
    $dayInWeek = date('w', $timestampDate);
    $hours = date('G', $timestampTime);

    if ($dayInWeek == 0 || $dayInWeek == 6) {
        print_r('Сегодня магазин выходной');
    } else if ($hours < 9) {
        $dateTime = strtotime($date . ' ' . $time);
        $openTime = strtotime($date . ' ' . '09:00');
        $openTimeInMinutes = ($openTime - $dateTime) / 60;
        print_r('Магазин еще не открылся, откроется через ' . $openTimeInMinutes);
    } else if ($hours >= 21) {
        $dateTime = strtotime($date . ' ' . $time);
        $midnightTime = strtotime($date . ' ' . '24:00');
        $openTimeInMinutes = ($midnightTime - $dateTime + (60 * 60 * 9)) / 60;
        print_r('Магазин уже закрылся, откроется через ' . $openTimeInMinutes);
    } else {
        $dateTime = strtotime($date . ' ' . $time);
        $closeTime = strtotime($date . ' ' . '21:00');
        $closeTimeInMinutes = ($closeTime - $dateTime) / 60;
        print_r('Магазин открыт, закроется через ' . $closeTimeInMinutes);
    }
}
