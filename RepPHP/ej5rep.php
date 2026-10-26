<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 5 repaso php</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simpledotcss@2/simple.min.css">


</head>
<body>

<?php
$equipo = [
    ["campeon" => "Darius", "rol" => "top", "bajas" => 6, "muertes" => 4, "asistencias" => 3, "oro" => 9200],
    ["campeon" => "Vi", "rol" => "jungla", "bajas" => 4, "muertes" => 5, "asistencias" => 12, "oro" => 8100],
    ["campeon" => "Ahri", "rol" => "mid", "bajas" => 7, "muertes" => 2, "asistencias" => 8, "oro" => 10500],
    ["campeon" => "Jinx", "rol" => "adc", "bajas" => 10, "muertes" => 3, "asistencias" => 6, "oro" => 11000],
    ["campeon" => "Leona", "rol" => "support", "bajas" => 1, "muertes" => 6, "asistencias" => 18, "oro" => 6400]
];

$totalOro = 0;
$bajasTotales = 0;

$campeonMasOro = 0;
$nombreCampeonMasOro = "";

foreach ($equipo as $e) {
    $totalOro += $e["oro"];
    $bajasTotales += $e["bajas"];
    if($e["oro"] > $campeonMasOro) {
        $campeonMasOro = $e["oro"];
        $nombreCampeonMasOro = $e["campeon"];
    }
    }


echo "<table border='1'>";
echo "<tr>  <th>Campeón</th> <th>Rol</th> <th>Bajas</th> <th>Muertes</th> <th>Asistencias</th> <th>Oro</th> <th>% Oro</th>  </tr>";

foreach ($equipo as $e) {
    $porcentajeOro = ($e["oro"] / $totalOro) * 100;
    if($e["oro"] == $campeonMasOro) {
        echo "<tr style='background-color: #ffd700; color: black;'>";
    } else {
        echo "<tr>";
    }
    echo "<td>" . $e["campeon"] . "</td>";
    echo "<td>" . $e["rol"] . "</td>";
    echo "<td>" . $e["bajas"] . "</td>";
    echo "<td>" . $e["muertes"] . "</td>";
    echo "<td>" . $e["asistencias"] . "</td>";
    echo "<td>" . $e["oro"] . "</td>";
    echo "<td>" . number_format($porcentajeOro, 2) . "%</td>";
    echo "</tr>";
}

echo "</table>";


echo"<p>El total de oro es: ". $totalOro . "  Bajas totales: ". $bajasTotales . "</p>";
echo"<p>El campeón con más oro es: ". $nombreCampeonMasOro . " con ". $campeonMasOro . "</p>";


?>

</body>
</html>
