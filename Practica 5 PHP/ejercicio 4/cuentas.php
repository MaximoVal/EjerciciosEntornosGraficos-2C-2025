<?php
session_start();
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
}

$_SESSION['contador']++;


echo "<h2>Visitas en esta sesión: " . $_SESSION['contador'] . "</h2>";

echo "<a href='cant_visitas.php'>Visitar otra pagina</a>";
echo "<br>";
echo "<br>";

if (isset($_POST['reset'])) {
    session_destroy();
    session_start();
    echo "<p>Contador reiniciado. Visite otro sitio para ver el contador reiniciado</p>";
}
?>

<form method="post">
    <button type="submit" name="reset">Reiniciar contador</button>
</form>

