<?php

$values = [
    'USD' => 0.38,
    'EUR'=> 0.34,
    'PLN'=> 1.64,
];

$currency = $_GET['currency'];
$amount = $_GET['amount'];

$result = $amount * $values[$currency];
if ($_GET['rounding'] == 'on') {
    $result = number_format($result, 2);
}

print_r($currency . ' - ' . $result);
