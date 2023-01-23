<?php

$string = '<h1>Text</h1><a href="https://google.com">Google</a><a href="https://yandex.ru">И еще одна ссылка на поисковик</a>';
$result = preg_match('//', $string, $matches);

preg_match_all('/<a [^<>]*href=[\'"]([^\'"]+)[\'"][^<>]*>/i', $string, $matches);
print_r($matches);
