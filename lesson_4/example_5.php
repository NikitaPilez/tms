<?php

// Имеется массив переводов по языкам. Нужно найти перевод по ключу и значению, если языка нет в переводах выводить сообщение, если ключа нет в переводах выводить сообщение.

$translates = [
    'en' => [
        'teachers' => 'Teachers',
        'personal_account' => 'My account',
        'contact_us' => 'Contact us'
    ],
    'ru' => [
        'teachers' => 'Преподователи',
        'personal_account' => 'Личный кабинет'
    ]
];

$lang = $argv[1];
$key = $argv[2];

if (in_array($lang, ['en', 'ru'])) {
    if (array_key_exists($key, $translates[$lang])) {
        print_r($translates[$lang][$key]);
    } else {
        print_r('Ключа нет в переводах');
    }
} else {
    print_r('Языка нет в переводах');
}
