<?php

$firstArray = ['Nikita', 'Alesya', 'Sergey'];
//print_r(array_chunk($firstArray, 2));

//print_r(count($firstArray));

$secondArray = ['Nikita', 'Pavel', 'Aleksey'];

$result = array_diff($firstArray, $secondArray);

//print_r($result);


$array = array_fill(7, 10, 'test');
//print_r($array);

$keys = array('test_key', 7, 12, 'last_key');
$array = array_fill_keys($keys, 'password');
//print_r($array);

function even($number)
{
    return $number % 2 == 0;
}
$array = [1, 3, 6, 10, 15];
//print_r(array_filter($array, "even"));
// if callback empty?

$firstColors = ['green', 'blue', 'red'];
$secondColors = ['yellow', 'black', 'white', 'green'];
$result = array_intersect($firstColors, $secondColors);
//print_r($result);

$elem = [
    'name' => 'Nik',
    'position' => 'developer',
    'phone' => '+375334958675',
];
$result = array_key_exists('phone', $elem);
//print_r($result);

function square($n)
{
    return ($n * $n);
}

$firstArray = [1, 2, 3, 4, 5];
$resultArray = array_map('square', $firstArray); // можно использовать стрелочную функцию
//print_r($resultArray);

$firstArray = [1, 3, 5];
$secondArray = [2, 4, 6];
$resultArray = array_merge($firstArray, $secondArray);
//print_r($resultArray);

$fruitsArray = ["orange", "banana"];
array_push($fruitsArray, "apple", "raspberry");
//print_r($fruitsArray);

$firstArray = ['bmw', 'mercedes', 'audi', 'porsche'];
$key = array_search('bmw', $firstArray);

//print_r($key);

$names = [
    'user_1' => 'Nik',
    'user_2' => 'Alex',
    'user_3' => 'Nik',
    'user_4' => 'Milana'
];

$result = array_unique($names);
//print_r($result);

$array = ["audi", "bmw", "mercedes", "porsche", "toyota"];

$result = array_slice($array, 2);
$result = array_slice($array, -2, 1);
$result = array_slice($array, 0, 3);

//print_r($result);

//print_r(in_array('audi', $array));
