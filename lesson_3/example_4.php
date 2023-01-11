<?php

// Использование значений по умолчанию в определении функции

welcome();

function welcome($name = 'Nikita')
{
    $message = 'Teacher ' . $name;
    print_r($message);
}
