<?php

$almacen = [
    ["nombre" => "Teclado", "stock" => 15],
    ["nombre" => "Ratón", "stock" => 3],
    ["nombre" => "Monitor", "stock" => 0]
];


function comprobarStock(array $productos, int $minimo): int {
    $contar = 0;

    foreach ($productos as $clave => $p) {
        if ($p["stock"] < $minimo) {
            $contar++;
        }
    }
    return $contar;
}

echo comprobarStock($almacen, 5);


// Ej B

function calcularNomina(float $salarioBase, int $horasExtra = 0): array {
    $PrecioExtra = 15;

    $extra = $horasExtra * $PrecioExtra;
    $total = $salarioBase + $extra;

    return $resultado = [
        "base"=> $salarioBase,
        "extra"=> $extra,
        "total"=> $total
    ];
}

var_dump(calcularNomina(1200));
var_dump(calcularNomina(1200,10));