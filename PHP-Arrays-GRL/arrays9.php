<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 9 arrays</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simpledotcss@2/simple.min.css">


</head>
<body>

<p>Ej 9 arrays</p>

<form action="arrays9.php" method="get">
    <p><label for="nombre1">Nombre entrenador 1: </label></p>
    <input type="text" name="nombre1" id="nombre1">

    <p><label for="altura1">Altura entrenador 1: </label></p>
    <input type="text" name="altura1" id="altura1">

    <p><label for="correo1">Correo electrónico 1: </label></p>
    <input type="email" name="correo1" id="correo1">

    

    <p><label for="nombre2">Nombre entrenador 2: </label></p>
    <input type="text" name="nombre2" id="nombre2">

    <p><label for="altura2">Altura entrenador 2: </label></p>
    <input type="text" name="altura2" id="altura2">

    <p><label for="correo2">Correo electrónico 2: </label></p>
    <input type="email" name="correo2" id="correo2">



    <p><label for="nombre3">Nombre entrenador 3: </label></p>
    <input type="text" name="nombre3" id="nombre3">

    <p><label for="altura3">Altura entrenador 3: </label></p>
    <input type="text" name="altura3" id="altura3">

    <p><label for="correo3">Correo electrónico 3: </label></p>
    <input type="email" name="correo3" id="correo3">

    

    <p><label for="nombre4">Nombre entrenador 4: </label></p>
    <input type="text" name="nombre4" id="nombre4">

    <p><label for="altura4">Altura entrenador 4: </label></p>
    <input type="text" name="altura4" id="altura4">

    <p><label for="correo4">Correo electrónico 4: </label></p>
    <input type="email" name="correo4" id="correo4">



    <p><label for="nombre5">Nombre entrenador 5: </label></p>
    <input type="text" name="nombre5" id="nombre5">

    <p><label for="altura5">Altura entrenador 5: </label></p>
    <input type="text" name="altura5" id="altura5">

    <p><label for="correo5">Correo electrónico 5: </label></p>
    <input type="email" name="correo5" id="correo5">


    
    <br><br>
    <input type="submit">
</form>


</body>
</html>

<?php


noRepetir = [];



$radar = [
    ["nombre" => $_GET['nombre1'], "altura" => (float)$_GET['altura1'], "correo" => $_GET['correo1']],
    ["nombre" => $_GET['nombre2'], "altura" => (float)$_GET['altura2'], "correo" => $_GET['correo2']],
    ["nombre" => $_GET['nombre3'], "altura" => (float)$_GET['altura3'], "correo" => $_GET['correo3']],
    ["nombre" => $_GET['nombre4'], "altura" => (float)$_GET['altura4'], "correo" => $_GET['correo4']],
    ["nombre" => $_GET['nombre5'], "altura" => (float)$_GET['altura5'], "correo" => $_GET['correo5']]
];


echo "<table>";

foreach ($lista as $entrenador) {
    echo "<tr><th> {$entrenador['nombre']} </th><td> {$entrenador['altura']} </td><td> {$entrenador['correo']} </td></tr>";
}


echo "</table>";
