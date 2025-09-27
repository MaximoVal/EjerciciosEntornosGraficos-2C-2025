<?php
    session_start();
    if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
        $_SESSION['usuario'] = $_POST['usuario'];
        $_SESSION['contrasena'] = $_POST['contrasena'];
        header("Location: paginaPrivada.php");
        exit();
    }

?>