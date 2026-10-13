<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 1 repaso php</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simpledotcss@2/simple.min.css">


</head>
<body>

<p>Ej 1 repaso</p>

<form action="ej1rep.php" method="get">
    <p><label for="nombre">Nombre del campeón: </label></p>
    <input type="text" name="nombre" id="nombre">

    <p><label for="oro">Catidad de oro disponible: </label></p>
    <input type="number" name="oro" id="oro">

    <p><label for="pociones">Catidad de pociones: </label></p>
    <input type="number" name="pociones" id="pociones">

    <br><br>
    <input type="submit">
</form>


<?php

$nombre= $_GET['nombre'];
$oro= $_GET['oro'];
$pociones= $_GET['pociones'];

const P_ESPADA = 350;
const P_POCION = 50;

$totalPociones= $pociones * P_POCION;
$totalCompra = $totalPociones + P_ESPADA;
$oroRestante = $oro - $totalCompra;
$porcentaje =round((float)(100 * $totalCompra / $oro), 2);


echo "<table>";
echo "<tr><th>Compra de $nombre</th></tr>";
echo "<tr><td>Oro disponible: $oro</td></tr>";
echo "<tr><td>Espada larga: ". P_ESPADA." de oro</td></tr>";
echo "<tr><td>$pociones pociones: $totalPociones de oro</td></tr>";
echo "<tr><td>Total de la compra: $totalCompra</td></tr>";
echo "<tr><td>Oro restante: $oroRestante</td></tr>";
echo "<tr><td>Porcentaje gastado: $porcentaje %</td></tr>";
echo "</table>";

?>
</body>
</html>