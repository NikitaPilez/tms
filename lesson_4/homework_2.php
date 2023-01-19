<?php

$string = 'Hello 34 fdgfdg 45 fg 55hhhg556';
$stringArray = str_split($string);
$filterArray = array_filter($stringArray, 'is_numeric');
print_r('Количество ' . count($filterArray) . ' сумма ' .  array_sum($filterArray));
