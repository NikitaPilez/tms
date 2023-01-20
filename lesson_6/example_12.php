<?php

$text = 'Никогда не переходите по ссылке https://test.com, лучше перейдите по ссылке http://google.com';
$regex = '/((?<=http:\/\/)|(?<=https:\/\/))([a-z0-9-_]+).[a-z]{2,}/';
preg_match_all($regex, $text, $matches);
print_r('Ссылки в тексте: ' . implode(', ', $matches[0]));
