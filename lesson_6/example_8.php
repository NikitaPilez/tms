<?php

// проверка валидности доменного имени

$url = 'https://google.com';

$result = preg_match('/^(http|https):\/\/[A-Za-z0-9_-]+.?(com|ru|by|net|org)/gm/', $url);
