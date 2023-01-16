<?php

$phrase = "You should eat fruits, vegetables, and fiber every day.";
$healthy = ["fruits", "vegetables", "fiber"];
$yummy = ["beer", "ice cream", "pizza"];

$newString = str_replace($healthy, $yummy, $phrase);

//print_r($newString);

$string = 'minsk';
//print_r(strtoupper($string));

$string = 'MINSK';
//print_r(strtolower($string));

$string = 'minsk';
//print_r(ucfirst($string));

//$rest = substr("Hello world!", -1);
//$rest = substr("Hello world!", -2);
//$rest = substr("Hello world!", -2, 1);
$rest = substr("Hello world!", 4, 3);
//print_r($rest);
//print_r(strlen($rest));

$array = str_split($rest);

$html = "<h1>Hello world!</h1><h2>How are you?</h2><a href=''>Link</a>";

//print_r(strip_tags($html, '<p><a>'));

$isContains = str_contains('Hello world!', '!');
//print_r($isContains);

$result = implode(':', [10, 12, 13, 20]);
//print_r($result);

$result = explode(',', "огурец,колбаса,тесто,лук");
//print_r($result);

$email = 'test@gmail.com';
//print_r(strstr($email, '@', true));

