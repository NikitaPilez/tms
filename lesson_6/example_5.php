<?php

$string = '<h1>Text</h1><a href="https://google.com">Google</a><a href="https://yandex.ru">И еще одна ссылка на поисковик</a>';
$result = preg_match('//', $string, $matches);

preg_match_all('/<a [^<>]*href=[\'"]([^\'"]+)[\'"][^<>]*>(\w*)/iu', $string, $matches); // TODO
print_r($matches);
