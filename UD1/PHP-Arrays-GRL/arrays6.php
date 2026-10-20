<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 6 arrays</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simpledotcss@2/simple.min.css">


</head>
<body>

<p>Ej 6 arrays</p>

<form action="arrays6.php" method="get">
    <p><label for="nombre1">Nombre pokemon 1: </label></p>
    <input type="text" name="nombre1" id="nombre1">

    <p><label for="altura1">Altura pokemon 1: </label></p>
    <input type="text" name="altura1" id="altura1">

    

    <p><label for="nombre2">Nombre pokemon 2: </label></p>
    <input type="text" name="nombre2" id="nombre2">

    <p><label for="altura2">Altura pokemon 2: </label></p>
    <input type="text" name="altura2" id="altura2">

    

    <p><label for="nombre3">Nombre pokemon 3: </label></p>
    <input type="text" name="nombre3" id="nombre3">

    <p><label for="altura3">Altura pokemon 3: </label></p>
    <input type="text" name="altura3" id="altura3">

    

    <p><label for="nombre4">Nombre pokemon 4: </label></p>
    <input type="text" name="nombre4" id="nombre4">

    <p><label for="altura4">Altura pokemon 4: </label></p>
    <input type="text" name="altura4" id="altura4">

    

    <p><label for="nombre5">Nombre pokemon 5: </label></p>
    <input type="text" name="nombre5" id="nombre5">

    <p><label for="altura5">Altura pokemon 5: </label></p>
    <input type="text" name="altura5" id="altura5">

    <br><br>
    <input type="submit">
</form>


</body>
</html>

<?php

$lista = [];

$lista[$_GET['nombre1']] = (float)$_GET['altura1'];
$lista[$_GET['nombre2']] = (float)$_GET['altura2'];
$lista[$_GET['nombre3']] = (float)$_GET['altura3'];
$lista[$_GET['nombre4']] = (float)$_GET['altura4'];
$lista[$_GET['nombre5']] = (float)$_GET['altura5'];


$media = array_sum($lista) / count($lista);

echo "<table>";

foreach ($lista as $nom => $alt) {
    echo "<tr><th> $nom </th><td> $alt </td></tr>";
}

echo "<tr><th> Media: </th><td> $media </td></tr>";

echo "</table>";
