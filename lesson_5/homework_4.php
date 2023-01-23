<?php

// Задание, реализовать валидацию пароля 1) должен содержать заглавную 2) должен содержать спец символ 3) больше 8 символов 4) чтоб имел минимум 1 букву

$password = 'sdfsfTer!w129';

$lowerSymbols = "qwertyuiopasdfghjklzxcvbnm";
$specialSymbols = "!@#$%^&*()_-=+:;{}[]?/,.<>\\";

$isHaveCapitalSymbol = strpbrk($password, strtoupper($lowerSymbols)) != 0;
$isHaveSpecialSymbol = strpbrk($password, $specialSymbols) != 0;
$isHaveAnyLetter = strpbrk($password, $lowerSymbols) != 0;
$isMoreEightSymbols = strlen($password) > 8;

if ($isHaveCapitalSymbol && $isHaveSpecialSymbol && $isMoreEightSymbols && $isHaveAnyLetter) {
    print_r($password . ' - валидный');
} else {
    print_r($password . ' - не валидный');
}



