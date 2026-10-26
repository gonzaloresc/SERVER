<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$datos = [
    [],[],[],[],[]
];

for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 4; $j++){
        $datos[$i][$j] = rand(5,35);
    }
}



echo "<table border=1>";

echo "<tr> <th>X</th> <th>Dia 1</th> <th>Dia 2</th> <th>Dia 3</th> <th>Dia 4</th></tr>";

$contadorMedicion = 1;
$contadorDia = 1;

$valorMax = 0;
$diaMax;
$medicionMax;



foreach($datos as $d){
    echo "<tr> <th>Medición $contadorMedicion</th>";
    $contadorMedicion++;
    $contadorDia = 1;

    foreach($d as $e){
        echo "<td>$e</td>";

        if($e > $valorMax){
            $valorMax = $e;
            $diaMax = $contadorDia;
            $medicionMax = $contadorMedicion -1;
        }

        $contadorDia++;
    }

    echo "</tr>";

}

echo "</table>";

$sumDiario = [];


for ($i = 0; $i<5; $i++){

    for($j = 0; $j<4; $j++){

        $sumDiario[$j] += $datos[$i][$j];

    }

}

$resumenDiario = ["dia1"=>0,"dia2"=>0,"dia3"=>0,"dia4"=>0];

$sumMedia = 0;

$cont = 0;
foreach ($resumenDiario as $clave=>&$r){

    $r = (int) number_format($sumDiario[$cont]/5,2);
    $cont++;
    echo "<p>La media del $clave es $r</p>";
    $sumMedia += $r;

}

$mediaTotal = $sumMedia/4;

echo "<p>La temperatura más alta es $valorMax, el dia es $diaMax, y la medición es $medicionMax</p>";

echo "<p>La media total es $mediaTotal</p>";

$otroContador = 0;

foreach ($resumenDiario as $clave=>$r){
    
    if($r > $mediaTotal){
        echo "<p>El $clave tiene una media superior a la media total</p>";
        
    } else {
        $otroContador++;
    }

    if($otroContador == 4){
        echo "<p>Ningún dia tiene una media superior a la media total</p>";
    }

}


?>

</body>
</html>