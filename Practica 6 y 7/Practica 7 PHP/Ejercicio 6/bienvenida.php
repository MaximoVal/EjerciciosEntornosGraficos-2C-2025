<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
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
    <?php
        session_start();
        if(!isset($_SESSION['nombre'])){
            echo "<script>alert('No se puede visitar la pagina');</script>";
            
        }
        else {
            // La sesión es válida, puedes mostrar el contenido protegido
            ?><h1>¡Bienvenido, <?php echo $_SESSION['nombre']; ?>!</h1>
            <?php
            session_destroy();
        }
    ?>
    <a href="ejercicio 6.php">Volver a ingresar mail</a>
</body>
</html>