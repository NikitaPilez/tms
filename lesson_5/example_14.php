<?php

//  email должен содержать @ +
//  до @ должно быть не менее 6 символов +
//  должен содержать в конце .com .ru .net +
//  спец символы до собачки #$%^&*()?/ +
//  проверка на пробел trim() +

$cyrillicSymbols = explode(' ', "й ц у к е н г ш щ з х ъ ф ы в а п р о л д ж э я ч с м и т ь б ю ё");

$email = trim($argv[1]);
$isContainsAt = str_contains($email, '@');
$stringBeforeAt = strstr($email, '@', true);
$isValidLength = strlen($stringBeforeAt) >= 6;

$isValidDomain = false;
$validDomains = ['com', 'ru', 'net', 'org', 'by'];

$hasSpecialSymbol = false;
$specialSymbols = ['#', '$', '%', '^', '&', '*', '(', ')'];

foreach ($validDomains as $domain) {
    if (str_ends_with($email, $domain)) {
        $isValidDomain = true;
    }
}

$splitEmail = str_split($email);
$intersectSpecialSymbol = array_intersect($splitEmail, $specialSymbols);
$intersectCyrillicSymbol = array_intersect($splitEmail, $cyrillicSymbols); // not work

if ($isValidLength && $isContainsAt && $isValidDomain && empty($intersectSpecialSymbol) && empty($intersectCyrillicSymbol)) {
    print_r('valid');
}
