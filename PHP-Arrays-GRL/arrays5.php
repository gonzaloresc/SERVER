<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 5 arrays</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simpledotcss@2/simple.min.css">


</head>
<body>

<p>Ej 5 arrays</p>

<form action="arrays5.php" method="get">
    <p><label for="cantidad">Que cantidad de billetes? </label></p>
    <input type="text" name="cantidad" id="cantidad">

    <br><br>
    <input type="submit">
</form>


</body>
</html>

<?php

$cantidad = $_GET['cantidad'];

$pokedolares = [500,200,100,50,20,10,5,2,1];

$resultado = [];

foreach ($pokedolares as $pokedo) {
    
    $total = (int)($cantidad / $pokedo);

    if ($total >= 1) {
        $resultado[$pokedo] = $total;
    }

    $cantidad = $cantidad % $pokedo;

}

echo "<ul>";

foreach ($resultado as $p => $r) {

    echo '<li>'. $p .' tiene '. $r .'</li>';

}
echo '</ul>';