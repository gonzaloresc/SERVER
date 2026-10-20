<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 1 arrays</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simpledotcss@2/simple.min.css">


</head>
<body>

<p>Ej 1 arrays</p>

<form action="arrays1.php" method="get">
    <p><label for="horas">Horas </label></p>
    <input type="number" name="horas" id="horas">

    <br><br>
    <input type="submit">
</form>


</body>
</html>

<?php
//$horas= $_GET['horas'];
//$minutos= $_GET['minutos'];
//$segundos= $_GET['segundos'];
//$segundos++;

$lista = [];

for ($i = 0; $i<50; $i++) {
    $lista[]=rand(0,99);
}

echo "<li>";

foreach ($lista as $valor) {
    echo "<ul>$valor</ul>";
}

echo "</li>";