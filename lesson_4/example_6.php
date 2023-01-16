<?php

$users = [
    [
        'first_name' => 'Андрей',
        'last_name' => 'Иванов',
        'patronymic' => 'Михайлович',
        'hired_at' => '20 Апреля 2012'
    ],
    [
        'first_name' => 'Сергей',
        'last_name' => 'Мирончук',
        'patronymic' => 'Андреевич',
        'hired_at' => '12 Мая 2020'
    ],
    [
        'first_name' => 'Андрей',
        'last_name' => 'Иванов',
        'patronymic' => 'Михайлович',
        'hired_at' => '3 Август 2022'
    ]
];


print_r(array_map('getInformation', $users));
function getInformation($item): string
{
    return $item['last_name'] . ' ' . $item['first_name'] . ' ' . $item['patronymic'] . ' принят на работу в ' . $item['hired_at'];
}
