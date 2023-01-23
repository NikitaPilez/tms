<?php

$string = 'sdff34swewf345345fgg4';
preg_replace('/\d/', ' ', $string);
//print_r($string);

$birthdays = [
    '10 July 2003',
    '29 February 1997'
];
$pattern = '/(\d+) (\w+) (\d+)/i';
$replacement = '$2 ' . date('Y');
//print_r(preg_replace($pattern, $replacement, $birthdays));

$string = 'The quick brown fox jumps over the lazy dog.';
$patterns = array();
$patterns[0] = '/quick/';
$patterns[1] = '/brown/';
$patterns[2] = '/fox/';
$replacements = array();
$replacements[0] = 'slow';
$replacements[1] = 'black';
$replacements[2] = 'bear';

//print_r(preg_replace($patterns, $replacements, $string));
