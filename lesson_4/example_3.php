<?php

$firstArray = ['Nikita', 'Alesya', 'Sergey'];
//print_r(array_chunk($firstArray, 2));

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
