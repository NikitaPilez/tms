<?php

// Возврат значений (возврат нескольких значений)

$result = subtraction(5, 2);
print_r('Результат ' . $result);

function subtraction(int $a, int $b)
{
    $result = $a - $b;
    return $result;
}
