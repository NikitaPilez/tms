<?php

// найти сколько раз встречаются гласные в строке

$string = 'Hello world, today we study cycles';
$arraySymbols = str_split($string);
$neededSymbols = ['e', 'u', 'i', 'o', 'a', 'y'];
$count = 0;

foreach ($arraySymbols as $symbol) {
    if (in_array($symbol, $neededSymbols)) {
        $count++;
    }
}

print_r('Count - ' . $count);

