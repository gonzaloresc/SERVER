<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 8 arrays</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simpledotcss@2/simple.min.css">


</head>
<body>

<p>Ej 8 arrays</p>

<form action="arrays8.php" method="get">
    <p><label for="cantidad">Cantidad de entrenadores: </label></p>
    <input type="number" name="cantidad" id="cantidad">

    
    <br><br>
    <input type="submit">
</form>


</body>
</html>

<?php


$cantidad = (int)$_GET["cantidad"];
$lista = [];

if ($cantidad > 0) {
    for ($i = 1; $i <= $cantidad; $i++) {
        echo"
            <form action=\"arrays8.php\" method=\"get\">
            <p><label for=\"nombre$i\">Nombre entrenador $i: </label></p>
            <input type=\"text\" name=\"nombre$i\" id=\"nombre$i\">

            <p><label for=\"altura$i\">Altura entrenador $i: </label></p>
            <input type=\"text\" name=\"altura$i\" id=\"altura$i\">

            <p><label for=\"correo$i\">Correo electrónico $i: </label></p>
            <input type=\"email\" name=\"correo$i\" id=\"correo$i\">
        
            <br><br>
        ";

        

    }

    echo"
    <input type=\"hidden\" name=\"cantidad\" value=" . $cantidad . ">
    // He hecho esta parte para guardar el tema de la cantidad

    <input type=\"submit\">
        </form>
    ";

    for ($i = 1; $i <= $cantidad; $i++) {
        $lista[] =  ["nombre" => $_GET["nombre$i"], "altura" => (float)$_GET["altura$i"], "correo" => $_GET["correo$i"]];
    }


    echo "<table>";

    foreach ($lista as $entrenador) {
        echo "<tr><th> {$entrenador['nombre']} </th><td> {$entrenador['altura']} </td><td> {$entrenador['correo']} </td></tr>";
    }

    echo "</table>";
}