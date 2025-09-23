<?php
    if(isset($_POST['enviar'])){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];

        $destinatario = "webmaster@gmail.com";
        $asunto = "Contacto desde la web";
        mail($destinatario, $asunto, $mensaje, "From: $nombre <$email>");
        echo "Correo enviado";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <textarea name="mensaje" placeholder="Mensaje" required></textarea><br>
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>