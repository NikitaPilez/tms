<?php

// Сделать валидацию на пароль, 1 заглавная, 1 цифра, 1 спецсимвол, длина не меньше 8

// 'A(?=[-_a-zA-Z0-9]*?[A-Z])(?=[-_a-zA-Z0-9]*?[a-z])(?=[-_a-zA-Z0-9]*?[0-9])[-_a-zA-Z0-9]{6,}z'

//$password = 'sdfsdfEdfdfdf6';
//$regex = '/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,})$/';
//print_r(preg_match($regex, $password));

$pattern = '/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/';
print_r(preg_match($pattern, 'test@gmail.com'));
