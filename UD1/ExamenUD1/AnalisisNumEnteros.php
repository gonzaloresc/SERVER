<?php

// Apartado A

function esPar(int $numero): bool {
    if($numero % 2 == 0){
        return true;
    } else {
        return false;
    }
}

// Apartado B

function contarDivisores(int $numero): int {
    $cont = 0;

    for($i = 1 ; $i <= $numero; $i++){
        if ($numero % $i == 0){
            $cont++;
        }
    }
    return $cont;
}

// Apartado C

function esPrimo(int $numero): bool {
    if(contarDivisores($numero) == 2){
        return true;
    } else {
        return false;
    }
}

// Apartado D

function describirNumero(int $numero): string {
    $par;
    $primo;

    if (esPar($numero)){
        $par = "par";
    } else {
        $par = "impar";
    }

    if (esPrimo($numero)){
        $primo = "primo";
    } else {
        $primo = "no es primo";
    }

    return "El número $numero es $par y $primo";
}


echo "<p>".describirNumero(7)."</p>";
echo "<p>".describirNumero(8)."</p>";
echo "<br>";


// Apartado E

for ($i = 1; $i <= 20; $i++){
    echo "<p>".describirNumero($i)."</p>";
}

$otroContador = 0;
for ($i = 1; $i <= 20; $i++){
    if(esPrimo($i)){
        $otroContador++;
    }
}
echo "<p>El total de primos es $otroContador</p>";