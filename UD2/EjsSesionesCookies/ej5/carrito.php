<?php
session_start();
if(!isset($_SESSION["Producto1"])){
    $_SESSION["Producto1"]=0;
    $_SESSION["Producto2"]=0;
    $_SESSION["Producto3"]=0;
}
if($_SERVER["REQUEST_METHOD"] === "POST"){

        if(isset($_POST["P1"])){
            $_SESSION["Producto1"]++;
        }
        if(isset($_POST["P2"])){
            $_SESSION["Producto2"]++;
        }
        if(isset($_POST["P3"])){
            $_SESSION["Producto3"]++;
        }
    }

if(isset($_POST["vaciar"])){
    session_destroy();
    header("Location: carrito.php");
}

if (isset($_COOKIE["tema"])){
    $tema = $_COOKIE["tema"];
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <style>
        .claro {background-color: white; color: black;}
        .oscuro {background-color: black; color: white;}
    </style>
</head>
<body class="<?php echo $tema ?>">

    <h1>Carrito</h1>

    <form method="post">
        <label for="P1">Juego de dados</label>
        <input type="submit" id="P1" name="P1" value="Añadir otro">
        <br>

        <label for="P2">Manual</label>
        <input type="submit" id="P2" name="P2" value="Añadir otro">
        <br>

        <label for="P3">Miniatura</label>
        <input type="submit" id="P3" name="P3" value="Añadir otro">
        <br>

        <button type="submit">Enviar</button>

    </form>

    <form method='post'>
        <button type='submit' id='vaciar' name='vaciar'>Vaciar</button>
    </form>

    <?php

        $precio1 = $_SESSION["Producto1"]*10;
        $precio2 = $_SESSION["Producto2"]*10;
        $precio3 = $_SESSION["Producto3"]*10;
        $precioTotal = $precio1 + $precio2 + $precio3;

        echo"<p> Juego de dados x".$_SESSION["Producto1"]." Precio= $precio1 € </p>";
        echo"<p> Manual x".$_SESSION["Producto2"]." Precio= $precio2 € </p>";
        echo"<p> Miniatura x".$_SESSION["Producto3"]." Precio= $precio3 € </p>";

        echo "<h4>Precio total= $precioTotal €</h4>"

    ?>

    <a href="productos.php">Volver a los productos</a>


</body>
</html>