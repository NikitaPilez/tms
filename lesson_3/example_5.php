<?php

// Использование значений по умолчанию в определении функции

dinner('салат');

function dinner($dish = 'суп', $count = 1)
{
    $message = 'Я буду ' . $dish . ' ' . $count;
    print_r($message);
}
