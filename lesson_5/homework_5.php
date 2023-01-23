<?php

// убрать все повторяющиеся символы из строки и вывести их количество.

$string = 'Hello world!';
$stringArray = str_split($string);
$findArray = [];
$newString = '';
$count = 0;
foreach ($stringArray as $key => $symbol) {
    if (!in_array($symbol, $findArray)) {
        $findArray[] = $symbol;
        $newString .= $symbol;
    } else {
        $count++;
    }
}

print_r('Count - ' . $count . ' new string ' . $newString);
