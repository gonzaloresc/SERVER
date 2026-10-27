<?php
echo "<h1>Ejercicio 1</h1>";

// Apartado A
$datos = [];

for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 4; $j++){
        $datos[$i][$j] = rand(5,35);
    }
}

// Apartado B
echo "<h2>Apartado B</h2>";
echo "<table border=1>";
echo "<tr> <th>X</th> <th>Medición 1</th> <th>Medición 2</th> <th>Medición 3</th> <th>Medición 4</th> </tr>";

for($i = 0; $i < 5; $i++){

    echo "<tr>";
    echo "<th>Dia ".($i + 1)."</th>";
    for($j = 0; $j < 4; $j++){
        echo "<td>".$datos[$i][$j]."</td>"; // Se tiene que concatenar si no, no va
    }
    echo "</tr>";
}
echo "</table>";

// Apartado C
echo "<h2>Apartado C</h2>";

$diaSum = [];
$diaMedia = ["Dia 1"=>0,"Dia 2"=>0,"Dia 3"=>0,"Dia 4"=>0,"Dia 5"=>0];

for($i = 0; $i < 5; $i++){
    $diaSum[$i] = 0; // Inicializar

    for($j = 0; $j < 4; $j++){
        $diaSum[$i] += $datos[$i][$j];
    }
}

$cont = 0;
foreach($diaMedia as $clave=>&$m){ // Hay que pasarlo con & para que se edite el array original
    $m = $diaSum[$cont] / 4;
    $cont++;
    echo "<p>La media de $clave es ".number_format($m,2)."</p>";
}

// Apartado D
echo "<h2>Apartado D</h2>";

$ValorMax = 0;
$DiaMax;
$medicionMax;
for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 4; $j++){
        if($datos[$i][$j] > $ValorMax){
            $ValorMax = $datos[$i][$j];
            $medicionMax = $j +1;
            $DiaMax = $i +1;
        }
    }
}
echo "<p>El valor máximo es $ValorMax, su dia es el dia $DiaMax y su medición es la $medicionMax</p>";


// Apartado E
echo "<h2>Apartado E</h2>";

$sumTotal = 0;
foreach($diaMedia as $clave=>$y){
    $sumTotal += $y;
}
$mediaTotal = $sumTotal/5;

echo "<p>La media total es $mediaTotal</p>";

$otroContador = 0;
foreach ($diaMedia as $clave=>$y){
    
    if($y > $mediaTotal){
        echo "<p>El $clave tiene una media superior a la media total</p>";
        
    } else {
        $otroContador++;
    }
}
if($otroContador == 5){
    echo "<p>Ningún dia tiene una media superior a la media total</p>";
}
