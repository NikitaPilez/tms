<?php

$number = rand(0, 2);

switch ($number) {
    case 0:
        print_r('Результат равен нулю');
        break;
    case 1:
        print_r('Результат равен единице');
        break;
    case 2:
        print_r('Результат равен двойке');
        break;
    default:
        print_r('Не удалось опеределить');
}
