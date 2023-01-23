<?php

// найти повторяющиеся символы
$string = 'ff kkk hello spagetti';
preg_match_all("/(.)\\1/", $string, $matches); // \1 повторить группу 1, но ее нужно экранировать
print_r($matches);
