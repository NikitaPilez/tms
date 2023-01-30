<?php

$users = [
    [
        'name' => 'Alex',
        'birthday' => '11.08.2020',
        'city' => 'Minsk'
    ],
    [
        'name' => 'Artyom',
        'birthday' => '12.09.2010',
        'city' => 'Warsaw'
    ],
    [
        'name' => 'Dima',
        'birthday' => '01.12.2010',
        'city' => 'Moscow'
    ],
];

// example 1
//$content = [];
//
//foreach ($users as $user) {
//    $string = $user['name'] . ";" . $user['birthday'] . ";" . $user['city'] . PHP_EOL;
//    $content[] = $string;
//}
//
//file_put_contents("test.csv", $content);

// example 2
//$fp = fopen('test.csv', 'w');
//
//foreach ($users as $fields) {
//    fputcsv($fp, $fields);
//}
//
//fclose($fp);

// read csv
//$peoples = file("peoples.csv");
//
//$data = [];
//foreach ($peoples as $line) {
//    $data[] = str_getcsv($line);
//}
//
//print_r($data);
