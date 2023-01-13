<?php

$firstArray = ['Nikita', 'Alesya', 'Sergey'];
//print_r(array_chunk($firstArray, 2));

$secondArray = ['Nikita', 'Pavel', 'Aleksey'];

$result = array_diff($firstArray, $secondArray);

print_r($result);
