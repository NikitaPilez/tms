<?php

// В переменной $year хранится год. Определите, является ли он високосным.

$year = $argv[1];

if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)){
    print_r('Високосный');
} else {
    print_r('Не високосный');
}