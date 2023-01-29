<?php

$firstVariable = $_POST['firstVariable'];
$secondVariable = $_POST['secondVariable'];

$action = $_POST['action'];

$result = match($action) {
    'addition' => $secondVariable + $firstVariable,
    'subtraction' => $secondVariable - $firstVariable,
    'multiplication' => $secondVariable * $firstVariable,
    'division' => $secondVariable / $firstVariable,
    default => 'Not found action'
};

print_r('Result ' . $result);
