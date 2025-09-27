<?php
if (isset($_COOKIE['contador'])) {
    $contador = $_COOKIE['contador'] + 1;
} else {
    $contador = 1;
}
setcookie("contador", $contador, time() + 60*60*24*30); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0df9f;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background: #e79d2c;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
            width: 320px;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if ($contador == 1): ?>
            <h1>¡Bienvenido!</h1>
            <p>Esta es tu primera visita a nuestra página.</p>
            <p>Esperamos que disfrutes de tu experiencia.</p>
            <a href="practica.php">Visitar página</a>
        <?php else: ?>
            <h1>¡Bienvenido de nuevo!</h1>
            <p>Has visitado esta página:</p>
            <div class="contador"><?= $contador ?></div>
            <a href="practica.php">Visitar página</a>
        <?php endif; ?>
    </div>
</body>
</html>