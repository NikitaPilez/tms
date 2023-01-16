<?php

$cyrillicSymbols = explode(' ', "й ц у к е н г ш щ з х ъ ф ы в а п р о л д ж э я ч с м и т ь б ю ё");
$specSymbols = ['#', '$', '%', '^', '*', '&', '(', ')', '?', '/'];
//  email должен содержать @ +
//  до @ должно быть не менее 6 символов +
//  должен содержать в конце .com .ru .net -
//  кириллица -
//  спец символы до собачки #$%^&*()?/ -
//  проверка на пробел trim() +

 // получить строку до @ strstr

$email = trim($argv[1]);
$isContainsAt = str_contains($email, '@');
$stringBeforeAt = strstr($email, '@', true);
$isValidLength = strlen($stringBeforeAt) >= 6;
print_r(trim(' sdfdsf   sdfsdf '));
