<?php

### Задание, есть материалы к курсам, которые имеют дату с которой они доступны, вывести только те которые доступны (10)

$materials = [
    [
        'id' => 1,
        'name' => 'task',
        'available_at' => '22.01.2023 10:00'
    ],
    [
        'id' => 2,
        'name' => 'video',
        'available_at' => '10.01.2023 10:00'
    ],
    [
        'id' => 1,
        'name' => 'lesson',
        'available_at' => '18.01.2023 10:00'
    ]
];

$availableMaterials = [];

foreach ($materials as $material) {
    if (strtotime($material['available_at']) < time()) {
        $availableMaterials[] = $material;
    }
}

print_r($availableMaterials);
