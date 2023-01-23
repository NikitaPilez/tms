<?php

$text = 'Моя тестовая строка';
$result = preg_match("/[А-я]/", $text);
print_r($result ? 'Содержит' : 'Не содержит'); // TODO
