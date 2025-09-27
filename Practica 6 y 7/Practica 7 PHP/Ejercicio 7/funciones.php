<?php



function consultaSQL($consulta_sql){
    $conexion = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conexion, "compras");

    $resultado = mysqli_query($conexion, $consulta_sql);
    mysqli_close($conexion);
    return $resultado;
}
