<?php

function calcularKDA(int $bajas, int $muertes, int $asistencias): float {
    if($muertes === 0) {
        $muertes = 1;
    }    

    return ($bajas + $asistencias) / $muertes;
}

function puedeComprar(int $oro, int $precio, int $reserva = 0): bool {

    $gastoAhorro = $precio + $reserva;

    if($gastoAhorro <= $oro) {
        return true;
    } else {
        return false;
    }

}

function registrarAsistencia(array &$jugador): void {
    $jugador['asistencias']++;
}

function sumarOro(int ...$cantidades): int {
    return array_sum($cantidades);
}

?>
