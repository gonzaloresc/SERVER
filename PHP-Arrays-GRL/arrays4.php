<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 4 arrays</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simpledotcss@2/simple.min.css">


</head>
<body>

<p>Ej 4 arrays</p>


</body>
</html>

<?php
//$horas= $_GET['horas'];
//$minutos= $_GET['minutos'];
//$segundos= $_GET['segundos'];
//$segundos++;

$lista = [];

for ($i = 0; $i<100; $i++) {
    $lista[]=rand(0,1);
}

$grupo = ["M"=>0,"F"=>0];

foreach ($lista as $elemento) {
    if ($elemento==1) {
        $grupo["M"]++;
    } else {
        $grupo["F"]++;
    }
}

echo "<p>Cantidad M: ".$grupo["M"].", Cantidad F: ".$grupo["F"]."</p>";