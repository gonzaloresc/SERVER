<?php

    require "conexion.php";
    /** @var DBO $db */
    $consulta = $db->query("SELECT nombre, tipo FROM pokemon limit 10");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej prueba</title>
</head>
<body>

<table border="1">

<tr><th>Nombre</th><th>Tipo</th></tr>

<?php
    while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
        echo "<tr><td>".$fila['nombre']."</td><td>".$fila['tipo']. "</td></tr>";
    }

?>

</table>

</body>
</html>