<?php

$salary = 1800;
$result = restOfMoney($salary);
print_r('Остаток ' . $result);
function restOfMoney(float $salary)
{
    $result = $salary * (0.87 * 0.8);

    if ($result > 1000) {
        $result = $result - 200;
    }

    return $result;
}
