<?php
    session_start();
    include 'funciones.php';

    $mensaje = ''; 

    if(isset($_POST['buscar'])) {
        $cancion = $_POST['cancion'] ?? '';
        $consulta = "SELECT * FROM buscador WHERE canciones = '$cancion'";
        $resultado = consultaSQL($consulta);
        if(mysqli_num_rows($resultado) == 0){
            $mensaje = '<p style="color:red;">No se ha encontrado la canción</p>';
        } else {
            $fila = mysqli_fetch_assoc($resultado);
            $mensaje = "<p style='color:green';>La canción: " . ($fila['canciones']) . " se ha encontrado</p>";
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1 class="text-center">Buscador de canciones</h1>
    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <form class="d-flex" role="search" method="POST" action="">
            <input class="form-control me-2" type="search" name="cancion" placeholder="Cancion" aria-label="Search"/>
            <button class="btn btn-outline-success" type="submit" name="buscar">Buscar</button>
        </form>
    </div>
</nav>
    <h1><?= $mensaje ?></h1>
  </body>