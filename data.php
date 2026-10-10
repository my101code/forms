<?php
$users = [
    ['id' => 1, 'name' => 'Alice', 'email' => 'alice@example.com'],
    ['id' => 2, 'name' => 'Bob', 'email' => 'bob@example.com'],
    ['id' => 3, 'name' => 'Charlie', 'email' => 'charlie@example.com']
];

$subscriptions = [
    ['user_id' => 1, 'precio_pagado' => 19.99, 'nivel' => 1, 'fecha_suscripcion' => '2025-01-15'],
    ['user_id' => 2, 'precio_pagado' => 49.99, 'nivel' => 3, 'fecha_suscripcion' => '2025-02-20'],
    ['user_id' => 3, 'precio_pagado' => 29.99, 'nivel' => 2, 'fecha_suscripcion' => '2025-03-10']
];


// If this file is accessed directly, return the data as JSON
if (basename($_SERVER['SCRIPT_FILENAME'] ?? '') === basename(__FILE__)) {
    header('Content-Type: application/json');
    echo json_encode([
        'usuarios' => $users,
        'suscripciones' => $subscriptions
    ]);
}