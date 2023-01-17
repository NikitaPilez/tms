<?php

// написать функцию которая генерирует пароль

print_r(generatePassword(12, true, true));

function generatePassword(int $length = 10, $shouldContainsCapitalSymbol = false, $shouldContainsSpecialSymbol = false): string
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $randomString = '';
    $hasCapitalSymbol = false;
    $specialSymbol = '@#$%^&*()?><][!';
    $specialSymbolArray = str_split($specialSymbol);
    $length = $shouldContainsSpecialSymbol ? $length - 1 : $length;

    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        if ($shouldContainsCapitalSymbol && !$hasCapitalSymbol && (int)$characters[$index] == 0) {
            $randomString .= strtoupper($characters[$index]);
            $hasCapitalSymbol = true;
        } else {
            $randomString .= $characters[$index];
        }
    }

    if ($shouldContainsSpecialSymbol) {
        $randomString .= $specialSymbolArray[rand(1, count($specialSymbolArray))];
    }

    return str_shuffle($randomString);
}
