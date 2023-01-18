<?php

// написать функцию которая генерирует пароль

print_r(generatePassword(12, true, true));

function generatePassword(int $length = 10, $shouldContainsCapitalSymbol = false, $shouldContainsSpecialSymbol = false): string
{
    $randomString = '';
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersArray = str_split($characters);
    $specialSymbol = '@#$%^&*()?><][!';
    $specialSymbolArray = str_split($specialSymbol);
    $length = $shouldContainsSpecialSymbol ? $length - 1 : $length;
    $length = $shouldContainsCapitalSymbol ? $length - 1 : $length;

    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    if ($shouldContainsSpecialSymbol) {
        $randomString .= $specialSymbolArray[rand(1, count($specialSymbolArray))];
    }

    if ($shouldContainsCapitalSymbol) {
        $randomString .= strtoupper($charactersArray[rand(1, count($charactersArray))]);
    }

    return str_shuffle($randomString);
}
