<?php

namespace lesson_9;

class DateTimeHelper
{
    public function getNextWorkDay(int $timestamp = null, string $format = 'd.m.Y'): string
    {
        $currentTime = $timestamp ?: time();
        $nowDay = date('w', $currentTime);

        if ($nowDay < 5) {
            $additionDay = 1;
        } else if ($nowDay == 5) {
            $additionDay = 3;
        } else {
            $additionDay = 2;
        }

        return date($format, $currentTime + ($additionDay * 86440));
    }

    public function getDayUntilBirthday(int $month, int $day): float
    {
        $now = time();
        $birthday = mktime(hour: 0, month: $month, day: $day);
        $dateDiffInSeconds = $birthday - $now;
        $diffDay = ceil($dateDiffInSeconds / (60 * 60 * 24));

        if ($diffDay > 0) {
            return $diffDay;
        } else {
            return 365 + $diffDay;
        }
    }
}

$dateTimeHelper = new DateTimeHelper();
//$nextWorkDay = $dateTimeHelper->getNextWorkDay();
//$birthday = $dateTimeHelper->getDayUntilBirthday(2, 11);
