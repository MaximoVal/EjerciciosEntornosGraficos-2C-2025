<?php
if (isset($_POST['estilo'])) {
    setcookie("estilo", $_POST['estilo'], time() + 60*60*24*30); 
    $_COOKIE['estilo'] = $_POST['estilo']; 
}
$estilo = isset($_COOKIE['estilo']) ? $_COOKIE['estilo'] : '#fff';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página con estilos</title>
</head>
<style>
    body{
    background-color: <?php echo ($estilo); ?>;
    }
</style>
<body>
    <div class="container" style="background-color: white; padding: 20px; border-radius: 10px; max-width: 600px; margin: 0 auto;">
        <h1>Bienvenido</h1>
        <p>El color de esta pagina es personalizable, por lo que debajo podes seleccionar el color de la pagina</p>

        <form method="POST">
            <label>Elige un estilo:</label>
            <input type="color" name="estilo">
            <button type="submit">Aplicar</button>
        </form>
    </div>
   
</body>
</html>