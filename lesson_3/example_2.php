<?php

// Вызов функции с аргументом
$name = 'Nikita';
welcome($name);

function welcome($name)
{
    print_r('Hello ' . $name);
}

