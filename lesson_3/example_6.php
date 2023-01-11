<?php

// Использование аргументов функции по умолчанию с 8.0

dinner(dish: 'Картофель', count: 2);

function dinner($dish = 'суп', $count = 1)
{
    $message = 'Я буду ' . $dish . ', количество: ' . $count;
    print_r($message);
}
