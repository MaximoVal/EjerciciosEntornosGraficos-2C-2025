<?php
$destinatario = "xx@xx.com";
$asunto = "Correo de prueba";
$mensaje = "<h1 style='color:red;'>Hola, es una prueba</h1>";

mail($destinatario, $asunto, $mensaje);
echo "Correo enviado";

