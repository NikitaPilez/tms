<?php
// preg_match() - проверка на соответствие регулярному выражению.
// preg_match_all() - глобальный поиск шаблона в строке

// [] - один из этих символов, () - группировка
$string = 'Hello world!';
$result = preg_match('/[A-Za-z]/', $string);
//print_r($result);

// i - после закрывающегося ограничителя шаблона это регистронезависимый поиск.

$string = 'Minsk - is the capital of Belarus';
$result = preg_match('/minsk/i', $string);
//print_r($result);

// \b - граница слова \B - не граница слова
$string = 'My code is very clean.';
$result = preg_match('/\bcode\b/', $string);
//print_r($result);

// $ - конец строки, ^ - начало строки, | - альтернатива
$string = 'Hello world!';
$result = preg_match('/^h/', $string);
//print_r($result);

// \w - все буквенно и цифровые символы, \W - наоборот, \s - любой пробельный символ, \S - наоборот

$string = 'test';
$result = preg_match('/\w/', $string);
//print_r($result);

// + - повторение от 1 и до бесконечности
// * - от 0 и до бесконечности
// {n} - n раз
// {n, 5} - от n до бесконечности
// {n1, n2} - от n1 до n2 раз
// ? - 0 или 1 символ, не больше

$string = '234 444';
$result = preg_match_all('/4+/', $string, $matches);
print_r($matches);

//
//// Извлекаем имя хоста из URL
//preg_match('@^(?:http://)?([^/]+)@i',
//    "http://www.php.net/index.html", $matches);
//$host = $matches[1];
//
//// извлекаем две последние части имени хоста
//preg_match('/[^.]+\.[^.]+$/', $host, $matches);
//echo "доменное имя: {$matches[0]}\n";
