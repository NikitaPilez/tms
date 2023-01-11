<?php

// Передача аргумента по ссылке

$name = 'Nikita';
welcome($name);
print_r($name);

function welcome(&$name)
{
    $name = 'Teacher ' . $name;
}

