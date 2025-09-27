<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <?php
    if (isset($_POST['noticia'])) {
        $noticia = $_POST['noticia'];
        setcookie("usuario", $noticia, time() + 60*60*24*30, "/"); 
        $_COOKIE['usuario'] = $noticia; 
    }



if (isset($_COOKIE['usuario'])) {
    if ($_COOKIE['usuario'] == "deportes") {
        ?>
        <body>
            <h1>Sección Deportes</h1>
            <p>Últimas noticias: El equipo local se clasifica a la final.</p>
            <a href="destroyCookie.php">Toque aquí para cambiar de noticia</a>
        </body>
        <?php
    } else if ($_COOKIE['usuario'] == "politica") {
        ?>
        <body>
            <h1>Sección Política</h1>
            <p>Últimas noticias: Nuevo acuerdo internacional firmado.</p>
            <a href="destroyCookie.php">Toque aquí para cambiar de noticia</a>
        </body>
        <?php
    } else if ($_COOKIE['usuario'] == "economia") {
        ?>
        <body>
            <h1>Sección Economía</h1>
            <p>Últimas noticias: La inflación se modera y los mercados reaccionan positivamente.</p>
            <a href="destroyCookie.php">Toque aquí para cambiar de noticia</a>
        </body>
        <?php
    }
     else {
    ?>
    <body>
    <div class="container-fluid mt-3 text-center">
        <h2>Seleccione un tipo de noticia</h2>
        <form action="" method="POST" class="">
            <input type="radio" name="noticia" value="deportes" id="deportes" class="form-check-input">
            <label for="deportes">Deportes</label>

            <input type="radio" name="noticia" value="politica" id="politica" class="form-check-input">
            <label for="politica">Política</label>

            <input type="radio" name="noticia" value="economia" id="economia" class="form-check-input">
            <label for="economia">Económica</label>

            <button type="submit" name="enviar" class="btn btn-primary mt-3">Guardar preferencia</button>
        </form>
    </div>
    </body>
    <?php
    }   
}
?>
