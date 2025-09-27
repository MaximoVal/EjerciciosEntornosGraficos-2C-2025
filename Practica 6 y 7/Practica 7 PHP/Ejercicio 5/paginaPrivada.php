<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 20px;
    }
    h1, h2 {
        color: #333;
    }
    a {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 15px;
        background-color: #007BFF;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }
    a:hover {
        background-color: #0056b3;
    }
    p{
        font-size: 18px;
        color: #555;
    }
</style>
<body>
    <h1>¡Bienvenido!</h1>
    <h2>Los datos ingresados son los siguientes:</h2>
    <?php
        session_start();
        if (isset($_SESSION['usuario']) && isset($_SESSION['contrasena'])) {
            echo "<p><strong>Usuario:</strong> " . htmlspecialchars($_SESSION['usuario']) . "</p>";
            echo "<p><strong>Contraseña: </strong>" . htmlspecialchars($_SESSION['contrasena']) . "</p>";
        }
    ?>
    <a href="ejercicio 5.php">Volver a registrarse</a>
</body>
</html>