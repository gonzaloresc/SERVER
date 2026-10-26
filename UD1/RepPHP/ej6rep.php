<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 6 repaso php</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simpledotcss@2/simple.min.css">


</head>
<body>

<?php

require_once 'ej6repFUNC.php';

$equipo = [
    ["campeon" => "Darius", "rol" => "top", "bajas" => 6, "muertes" => 4, "asistencias" => 3, "oro" => 9200],
    ["campeon" => "Vi", "rol" => "jungla", "bajas" => 4, "muertes" => 5, "asistencias" => 12, "oro" => 8100],
    ["campeon" => "Ahri", "rol" => "mid", "bajas" => 7, "muertes" => 2, "asistencias" => 8, "oro" => 10500],
    ["campeon" => "Jinx", "rol" => "adc", "bajas" => 10, "muertes" => 3, "asistencias" => 6, "oro" => 11000],
    ["campeon" => "Leona", "rol" => "support", "bajas" => 1, "muertes" => 6, "asistencias" => 18, "oro" => 6400]
];


echo "<p>KDA Ahri: " . number_format(calcularKDA($equipo[2]["bajas"], $equipo[2]["muertes"], $equipo[2]["asistencias"]), 2) . "</p>";
echo "<p>KDA Jinx: " . number_format(calcularKDA($equipo[3]["bajas"], $equipo[3]["muertes"], $equipo[3]["asistencias"]), 2) . "</p>";
echo "<p>KDA Ejemplo: " . number_format(calcularKDA(muertes: 0, bajas: 4, asistencias: 6), 2) . "</p>";

echo "<p>".puedeComprar(1000, 900)."</p>";
echo "<p>".puedeComprar(1000, 900, 150)."</p>";
echo "<p>".puedeComprar(1000, 900, 100)."</p>";

registrarAsistencia($equipo[4]);
echo "<p>Asistencias Leona: " . $equipo[4]['asistencias'] . "</p>";
echo "<p>KDA Leona: " . number_format(calcularKDA($equipo[4]["bajas"], $equipo[4]["muertes"], $equipo[4]["asistencias"]), 2) . "</p>";

echo "<p>" . sumarOro(300, 150, 50) . "</p>";
echo "<p>" . sumarOro(300) . "</p>";
echo "<p>" . sumarOro() . "</p>";

echo "<p>" . sumarOro($equipo[0]["oro"], $equipo[1]["oro"], $equipo[2]["oro"], $equipo[3]["oro"], $equipo[4]["oro"]) . "</p>";


?>

</body>
</html>
