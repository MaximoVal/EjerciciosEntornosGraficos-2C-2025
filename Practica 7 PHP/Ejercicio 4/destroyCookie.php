<?php
setcookie("usuario", "", time() - 3600, "/"); 

unset($_COOKIE["usuario"]);
header("Location: ejercicio 4.php");
exit();
?>
