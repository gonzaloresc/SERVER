<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba ej 1 POO</title>
</head>
<body>
    
<?php

require_once "Guerrero.php";

$goku = new Guerrero("Goku","50");
$gohan = new Guerrero("Gohan","30");

// Prueba 1
$goku->entrenar(3);
echo "<p>".$goku->mostrarEstado()."</p>";

// Prueba 2
$goku->entrenar(3);
echo "<p>".$goku->mostrarEstado()."</p>";

// Prueba 3
$goku->descansar(2);
echo "<p>".$goku->mostrarEstado()."</p>";

// Prueba 4
$goku->entrenar(3);
echo "<p>".$goku->mostrarEstado()."</p>";

// Prueba 5
$goku->comerJudiaMagica();
echo "<p>".$goku->mostrarEstado()."</p>";

// Prueba 6
$goku->entrenar(1);
$goku->comerJudiaMagica();
echo "<p>".$goku->mostrarEstado()."</p>";

// Prueba 7
$gohan->comerJudiaMagica();
echo "<p>".$gohan->mostrarEstado()."</p>";

// Prueba 8
$gohan->entrenar(5);
$gohan->comerJudiaMagica();
echo "<p>".$gohan->mostrarEstado()."</p>";

// Prueba 9
$gohan->entrenar(1);
$gohan->descansar(3);
echo "<p>".$gohan->mostrarEstado()."</p>";

// Prueba 10
//$gohan->entrenar(0);
//$gohan->descansar(-2);

// EXCEPCION
echo "<p>".$gohan->mostrarEstado()."</p>";


?>
</body>
</html>