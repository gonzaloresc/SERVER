<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 3 arrays</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simpledotcss@2/simple.min.css">


</head>
<body>

<p>Ej 3 arrays</p>


</body>
</html>

<?php
//$horas= $_GET['horas'];
//$minutos= $_GET['minutos'];
//$segundos= $_GET['segundos'];
//$segundos++;

$lista = [];

for ($i = 0; $i<33; $i++) {
    $lista[]=rand(0,100);
}

sort($lista);
$media= array_sum($lista)/count($lista);

echo "<p>El numero mas bajo es: $lista[0]</p>";
echo "<p>El numero del medio es: $media</p>";
echo "<p>El numero mas alto es: $lista[32]</p>";