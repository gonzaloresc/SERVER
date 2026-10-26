<?php

$encargos = [
    ["cliente" => "Ana", "copias" => 80, "color" => false],
    ["cliente" => "Luis", "copias" => 150, "color" => true],
    ["cliente" => "Marta", "copias" => 300, "color" => false],
    ["cliente" => "Pablo", "copias" => 100, "color" => true]
];

function precioCopia(bool $color): float {
    if ($color) {
        return 0.20;
    } else {
        return 0.05;
    }
}

function porcentajeDescuento(int $copias): int {
    if ($copias < 100) {
        return 0;
    } else if ($copias <= 249) {
        return 5;
    } else {
        return 10;
    }
}

function calcularEncargo(int $copias, bool $color): array {
    $precio = precioCopia($color);

    $base = $precio * $copias;
    $descuento = ($base * porcentajeDescuento($copias)) / 100;
    $precioDescuento = $base - $descuento;
    $iva = ($precioDescuento * 21) /100;
    $total = $precioDescuento + $iva;

    return $resultado = [
        "base"=> number_format($base,2),
        "descuento"=> number_format($descuento,2),
        "iva"=> number_format($iva,2),
        "total"=> number_format($total,2),
    ];
}

echo "<table border= 1>";
echo "<tr>  <th>Cliente</th> <th>C. copias</th> <th>Tipo Impresión</th> <th>Base</th> <th>Descuento</th> <th>IVA</th> <th>Total</th>  </tr>";
$var = [];

for ($i = 0; $i < 4; $i++) {
    $var[$i] = calcularEncargo($encargos[$i]['copias'], $encargos[$i]['color']);  
}

for ( $i = 0; $i < 4; $i++) {
    echo "<tr>";

    echo "<td>".$encargos[$i]["cliente"]."</td>";
    echo "<td>".$encargos[$i]["copias"]."</td>";
    echo "<td>".$encargos[$i]["color"]."</td>";

    echo "<td>".$var[$i]["base"]."</td>";
    echo "<td>".$var[$i]["descuento"]."</td>";
    echo "<td>".$var[$i]["iva"]."</td>";
    echo "<td>".$var[$i]["total"]."</td>";

    echo "</tr>";
}
echo "</table>";

function contarEncargosDesde(array $encargos, float $umbral): int {
    $resultado = 0;
    $var = [];

    for ($i = 0; $i < count($encargos); $i++) {
        $var[$i] = calcularEncargo($encargos[$i]['copias'], $encargos[$i]['color']);
        if ($var[$i]["total"] >= $umbral){
            $resultado++;
        }  
    }
    return $resultado;
}

echo contarEncargosDesde($encargos,20);
