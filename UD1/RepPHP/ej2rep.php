<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 2 repaso php</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simpledotcss@2/simple.min.css">


</head>
<body>
<?php

$vida= $_GET['vida'];
$disponible= (bool)$_GET['disponible'];
$respuesta;
const APLASTAR = 900;

if ($vida <= 0) {
    $respuesta = "El dragón ya ha caido";
} elseif ($vida<=900 && $disponible) {
    $respuesta = "¡Usa Aplastar!";
} elseif ($vida>900 && $disponible) {
    $respuesta = "Falta ".$vida-APLASTAR." punto(s) de daño para poder rematarlo";
} elseif ($disponible){
    $respuesta = "Aplastar está en enfriamiento";
}




echo "<table>";
echo "<tr>
        <th>Vida</th>
        <th>Disponible</th>
        <th>Salida esperada</th>
    </tr>";

echo "<tr>
        <td>$vida</td>
        <td>$disponible</td>
        <td>$respuesta</td>
    </tr>";
echo "</table>";

?>
</body>
</html>