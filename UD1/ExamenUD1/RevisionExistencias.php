<?php

// Aprtado A

$productos = [];

for ($i = 0; $i<8; $i++){
    $productos[$i] = rand(0,15);
}


// Apartado B

echo "<ul>";
foreach ($productos as $clave=>$p){
    echo "<li>".($clave + 1)." -> ".$p."</li>";
}
echo "</ul>";

// Apartado C

$cont = 0;
foreach ($productos as $clave=>$p){
    if ($p < 5){
        echo "<p> El producto ".($clave+1)." necesita reposicion </p>";
        $cont++;
    }
}
if($cont < 1){
    echo "<p>Ningún producto necesita reposicion!</p>";
} else {
    echo "<p>La cantidad de productos que hay que reponer es: ".$cont."</p>";
}

// Apartado D

$repos= [];

foreach ($productos as $clave=>&$m){
    if ($m < 5){
        $repos[$clave]= 10 - $m;
        $m = 10;
    }
}

foreach ($productos as $clave=>$p){
    if(isset($repos[$clave])){
        echo "<p>Al producto ".($clave+1)." se le han añadido ".$repos[$clave]." unidades</p>";
    }
}

// Apartado E

$sumaTotal= 0;

echo "<ul>";
foreach ($productos as $clave=>$p){
    echo "<li>".($clave + 1)." -> ".$p."</li>";
    $sumaTotal += $p;
}
echo "</ul>";

echo "<p>El total de productos es $sumaTotal</p>";

?>