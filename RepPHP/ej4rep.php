<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 3 repaso php</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simpledotcss@2/simple.min.css">


</head>
<body>
<?php

$oleadas= $_GET['oleadas'];
$oroNecesario= $_GET['oroNecesario'];
$acumulado = 0;
$cannon = "no";

const CANNON = 60;
const NORMAL = 105;


echo "<table>";
echo "<caption>Primera Forma</caption>";
echo "<tr>
        <th>oleada</th>
        <th>Cañon</th>
        <th>Oro</th>
        <th>Acumulado</th>
    </tr>";
for($i = 1; $i <= $oleadas; $i++){

    if ($i % 3 == 0){
        $cannon = "si";
        $oro = NORMAL + CANNON;
    } else {
        $cannon = "no";
        $oro = NORMAL;
    }

    $acumulado += $oro;

    echo "<tr>";
    echo "<td> $i </td>";
    echo "<td> $cannon </td>";
    echo "<td> $oro </td>";
    echo "<td> $acumulado </td>";
    echo "</tr>";
}

$acumulado = 0;
$indice = 0;

echo "<table>";
echo "<caption>Segunda Forma</caption>";
echo "<tr>
        <th>oleada</th>
        <th>Cañon</th>
        <th>Oro</th>
        <th>Acumulado</th>
    </tr>";
while($acumulado < $oroNecesario){

    
    $indice++;

    if ($indice % 3 == 0){
        $cannon = "si";
        $oro = NORMAL + CANNON;
    } else {
        $cannon = "no";
        $oro = NORMAL;
    }

    $acumulado += $oro;

    echo "<tr>";
    echo "<td> $indice </td>";
    echo "<td> $cannon </td>";
    echo "<td> $oro </td>";
    echo "<td> $acumulado </td>";
    echo "</tr>";
}

?>
</body>
</html>