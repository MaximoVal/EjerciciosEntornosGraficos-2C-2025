<?php
    include 'funciones.php';
    session_start();
    if(isset($_POST['enviar'])){
        $mail=$_POST['mail'];
        $consulta = "SELECT * FROM alumnos WHERE mail = '$mail'";
        $resultado=consultaSQL($consulta);
        if(mysqli_num_rows($resultado)>0){
            $fila = mysqli_fetch_assoc($resultado);
            $_SESSION['nombre'] = $fila['nombre'];

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
  <body>
    <div class="container mt-3" style="max-width: 500px;background-color: #b3d0eeff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <form action="" method="POST">
        <div class="mb-3">
            <label for="usuario" class="form-label">Mail</label>
            <input type="email" class="form-control" id="usuario" name="mail" required>
        </div>
        <button type="submit" class="btn btn-primary" name="enviar">Enviar Datos</button>
    </form>
    </div>
    <br>
    <h2 class="text-center" ><a href="bienvenida.php" style="color:green; text-decoration:none;">Haga click aqui para su bienvenida</a></h2>
    
  </body>