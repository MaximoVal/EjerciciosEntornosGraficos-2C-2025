<?php
if (isset($_POST['enviar'])) {
    $email = $_POST['email'];
    $asunto= "Recomendacion de sitio web";
    $mensaje= "Te recomiendo visitar este sitio web.";
    mail($email, $asunto, $mensaje);
    echo "Correo enviado a $email";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sito Web</title>
</head>
<body style="background-color:rgb(172, 220, 240);">
    <nav style="background-color:rgb(122, 186, 211);">Menu de navegacion</nav>
    <h1>Titulo Pagina</h1>
    <p>Este es un parrafo de ejemplo en la pagina web.</p>
    <a href="https://www.ejemplo.com">Visitar Ejemplo.com</a>
    <br>
    <br>
    <img src="" alt="Imagen xample">
    <br>
    <br>
    <p style="font-size: 30px; color: blueviolet; font-weight: bold;">Si te gusto este sitio web, podes recomendarselo a un amigo colocando su mail en la caja de abajo</p>
    <form action="#" method="POST">
        <input type="email" name="email" placeholder="Ingresa el email de tu amigo" required style="padding: 10px; width: 450px;">
        <button type="submit" name="enviar" style="width: 50px;height: 30px;">Enviar</button>
    </form>
    <br>
    <br>

    <footer style="background-color:rgb(71, 130, 153);">Es el footer de la pagina</footer>
</body>
</html>