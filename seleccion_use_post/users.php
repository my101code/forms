<?php
require __DIR__ . '/../data.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <h1>Lista de usuarios</h1>

    <form method="post" action="suscripcion.php">
        <ul>
            <?php foreach ($users as $user): ?>
                <li>
                    <button type="submit" name="id" value="<?php echo (int) $user['id']; ?>">
                        <?php echo htmlspecialchars($user['name']); ?>
                    </button>
                </li>
            <?php endforeach; ?>
        </ul>
    </form>
</body>
</html>
