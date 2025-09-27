<?php
session_start();
require_once 'funciones.php';

if(isset($_POST['enviar'])){
    $id_producto = $_POST['id_producto'];
    if(isset($_SESSION['carrito'])){
        $_SESSION['carrito'][] = $id_producto;
    } else {
        $_SESSION['carrito'] = array($id_producto);
    }
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Carrito de compras</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-3" style="max-width: 500px; background-color: #b3d0eeff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
    <?php
    $consulta = "SELECT * FROM catalogo";
    $resultado = consultaSQL($consulta);

    while ($fila = mysqli_fetch_assoc($resultado)) {
    ?>
        <div class="mb-3 p-2" style="border-bottom:1px solid #ccc;">
            <p>Producto: <?= $fila['producto'] ?> - Precio: $<?= $fila['precio'] ?></p>
            <form action="" method="POST">
                <input type="hidden" name="id_producto" value="<?= $fila['id'] ?>">
                <button type="submit" class="btn btn-primary" name="enviar">Comprar</button>
            </form>
        </div>
    <?php
    }
    ?>
    <div class="mt-3">
    <form method="POST">
        <button type="submit" class="btn btn-success" name="ver_carrito">
            Ver Carrito (<?= isset($_SESSION['carrito']) ? count($_SESSION['carrito']) : 0 ?>)
        </button>
    </form>
</div>
  </div>

<br>
<br>
  <div class="mt-3 container-fluid text-center" style="max-width: 900px; background-color: #f8f9fa; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
  <?php
  if (isset($_POST['ver_carrito'])) {
      if (!empty($_SESSION['carrito'])) {
          echo "<h3>Productos en el carrito:</h3>";
          foreach ($_SESSION['carrito'] as $id) {
              $consulta = "SELECT * FROM catalogo WHERE id = $id";
              $resultado = consultaSQL($consulta);
              if ($fila = mysqli_fetch_assoc($resultado)) {
                  echo "<p>ID: " . $fila['id'] . " - Producto: " . $fila['producto'] . " - Precio: $" . $fila['precio'] . "</p>";
              }
          }
      } else {
          echo "<p>El carrito está vacío.</p>";
      }
  }
  ?>
    <form action="" method="POST">
        <button type="submit" class="btn btn-danger" name="vaciar_carrito">Vaciar Carrito</button>
        <button type="submit" class="btn btn-success" name="comprar">Comprar</button>
    </form>
    <?php
    if (isset($_POST['vaciar_carrito'])) {
        unset($_SESSION['carrito']);
        header("Refresh:0");
    }
    if (isset($_POST['comprar'])) {
        if (!empty($_SESSION['carrito'])) {
            $total = 0;
            foreach ($_SESSION['carrito'] as $id) {
              foreach ($_SESSION['carrito'] as $id) {
              $consulta = "SELECT * FROM catalogo WHERE id = $id";
              $resultado = consultaSQL($consulta);
              if ($fila = mysqli_fetch_assoc($resultado)) {
                  $total += $fila['precio'];
              }
              
          }
          }
          echo "<p>Total a pagar: $" . $total . "</p>";
        } else {
            echo "<p>El carrito está vacío. No se puede realizar la compra.</p>";
        }
    }
    ?>
  </div>
</body>
</html>
