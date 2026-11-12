<?php
session_start();

if(isset($_POST["vaciar"])){
    session_destroy();
    header("Location: reserva.php");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen</title>
</head>
<body>
    
    <h1>Resumen entrada</h1>

<?php
    
    if(!isset($_SESSION['nombre']) || !isset($_SESSION['peli']) || !isset($_SESSION['cantidad']) ){
        echo '<a href="reserva.php">IR A LA RESERVA</a>';
    }

    echo "<p>Nombre: ".$_SESSION['nombre']."</p>";
    echo "<p>Película: ".$_SESSION['peli']."</p>";
    echo "<p>Cantidad de entradas: ".$_SESSION['cantidad']."</p>";

    $entrada = 8 * $_SESSION['cantidad'];

    echo "<p>Importe total: $entrada</p>";
    
?>

<form method='post'>
<button type='submit' id='vaciar' name='vaciar'>Vaciar</button>
</form>


</body>
</html>