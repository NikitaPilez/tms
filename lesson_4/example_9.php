<?php

$string = '<h1>This is heading 1</h1><h1>This is heading 2</h1><h1>This is heading 3</h1>';

$searchArray = ['<h1>', '</h1>'];
$replaceArray = ['<h2>', '</h2>'];

$result = str_replace($searchArray, $replaceArray, $string);

print_r($result);
