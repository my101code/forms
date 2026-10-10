<?php
require __DIR__ . '/../data.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(400);
    exit('Error: envía el formulario para ver la selección.');
}

$userId = filter_var($_POST['user_id'] ?? null, FILTER_VALIDATE_INT);
if ($userId === false || $userId === null) {
    http_response_code(400);
    exit('Error: selecciona un usuario válido.');
}

$user = null;
foreach ($users as $item) {
    if ((int) $item['id'] === $userId) {
        $user = $item;
        break;
    }
}

if ($user === null) {
    http_response_code(400);
    exit('Error: el usuario seleccionado no existe.');
}

$availableColors = ['rojo', 'verde', 'azul'];
$submittedColors = $_POST['colors'] ?? [];
if (!is_array($submittedColors) || $submittedColors === []) {
    http_response_code(400);
    exit('Error: selecciona al menos un color.');
}

$colors = [];
foreach ($submittedColors as $color) {
    if (!is_string($color) || !in_array($color, $availableColors, true)) {
        http_response_code(400);
        exit('Error: se recibió un color no válido.');
    }

    if (!in_array($color, $colors, true)) {
        $colors[] = $color;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la selección</title>
</head>
<body>
    <h1>Resultado de la selección</h1>
    <p><strong>Usuario:</strong> <?php echo htmlspecialchars($user['name'], ENT_QUOTES, 'UTF-8'); ?></p>
    <p><strong>Colores:</strong> <?php echo htmlspecialchars(implode(', ', $colors), ENT_QUOTES, 'UTF-8'); ?></p>
    <p><a href="users.php">Volver al formulario</a></p>
</body>
</html>