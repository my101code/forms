<?php
require __DIR__ . '/../data.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$user = null;
foreach ($users as $item) {
    if ((int) $item['id'] === $id) {
        $user = $item;
        break;
    }
}

$subscription = null;
foreach ($subscriptions as $item) {
    if ((int) $item['user_id'] === $id) {
        $subscription = $item;
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suscripción</title>
</head>
<body>
    <?php if ($user): ?>
        <h1>Detalle del usuario</h1>
        <p><strong>ID:</strong> <?php echo (int) $user['id']; ?></p>
        <p><strong>Nombre:</strong> <?php echo htmlspecialchars($user['name']); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>

        <?php if ($subscription): ?>
            <h2>Información de suscripción</h2>
            <p><strong>Precio pagado:</strong> $<?php echo number_format((float) $subscription['precio_pagado'], 2); ?></p>
            <p><strong>Nivel:</strong> <?php echo (int) $subscription['nivel']; ?></p>
            <p><strong>Fecha de suscripción:</strong> <?php echo htmlspecialchars($subscription['fecha_suscripcion']); ?></p>
        <?php else: ?>
            <p>No hay información de suscripción para este usuario.</p>
        <?php endif; ?>
    <?php else: ?>
        <h1>Usuario no encontrado</h1>
    <?php endif; ?>

    <p><a href="users.php">Volver a usuarios</a></p>
</body>
</html>
