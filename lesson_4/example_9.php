<?php

$string = '<h1>This is heading 1</h1><h1>This is heading 2</h1><h1>This is heading 3</h1>';

$result = str_replace('<h1>', '<h2>', $string);

print_r($result);
