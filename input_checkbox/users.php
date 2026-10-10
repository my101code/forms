<?php
require __DIR__ . '/../data.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegir usuario y colores</title>
</head>
<body>
    <h1>Elige un usuario y tus colores</h1>

    <form method="post" action="suscripcion.php">
        <fieldset>
            <legend>Usuario</legend>
            <?php foreach ($users as $user): ?>
                <label>
                    <input
                        type="radio"
                        name="user_id"
                        value="<?php echo (int) $user['id']; ?>"
                        required
                    >
                    <?php echo htmlspecialchars($user['name'], ENT_QUOTES, 'UTF-8'); ?>
                </label><br>
            <?php endforeach; ?>
        </fieldset>

        <fieldset>
            <legend>Colores (puedes elegir uno o varios)</legend>
            <label><input type="checkbox" name="colors[]" value="rojo"> Rojo</label><br>
            <label><input type="checkbox" name="colors[]" value="verde"> Verde</label><br>
            <label><input type="checkbox" name="colors[]" value="azul"> Azul</label>
        </fieldset>

        <button type="submit">Mostrar selección</button>
    </form>
</body>
</html>