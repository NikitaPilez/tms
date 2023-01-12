<?php

print_r('Дней осталось: ' . getDayUntilBirthday($argv[1]));

function getDayUntilBirthday(string $day)
{
    $now = time();
    $birthday = strtotime($day);
    $dateDiffInSeconds = $birthday - $now;
    $diffDay = ceil($dateDiffInSeconds / (60 * 60 * 24));

    if ($diffDay > 0) {
        return $diffDay;
    } else {
        return 365 + $diffDay;
    }
}
