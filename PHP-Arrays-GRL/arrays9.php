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
    
    <br><br>
    <input type="submit">
</form>


</body>
</html>

<?php


$noRepetir = [];


$radar = [
    [0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0]
];

foreach ($radar as $elemento) {
    foreach ($elemento as $e) {
        $r = rand(100,999);
        if(!in_array($r,$noRepetir)){
            $e = $r;
            $noRepetir[] = $r;
        }
    }
}

echo "<table>";

foreach ($radar as $elemento) {
    array_sort($elemento);
    echo "<tr><td style='color: green'>".$elemento[0]."<td>";
    for ($i = 1; $i < (count($elemento))-1; $i++) {
        echo"<td style='color: black'>".$elemento[$i]."</td>";

    }
    echo "<td style='color: blue'>".$elemento[8]."</td></tr>";
}


echo "</table>";
