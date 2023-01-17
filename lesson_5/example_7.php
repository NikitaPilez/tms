<?php

// изменить статус trash у заказов у которых номера не белорусские

$orders = [
    [
        'phone' => '375295675435',
        'name' => 'Kirill',
        'product_id' => 3,
        'status' => 'new'
    ],
    [
        'phone' => '375334564356',
        'name' => 'Max',
        'product_id' => 4,
        'status' => 'new'
    ],
    [
        'phone' => '48295675435',
        'name' => 'Andrey',
        'product_id' => 6,
        'status' => 'new'
    ]
];

foreach ($orders as &$order) {
    if (isNeededMakeTrash($order['phone'])) {
        $order['status'] = 'trash';
    }
}

function isNeededMakeTrash(string $phone): bool
{
    $result = substr($phone, 0, 3);
    return $result !== '375';
}

print_r($orders);
