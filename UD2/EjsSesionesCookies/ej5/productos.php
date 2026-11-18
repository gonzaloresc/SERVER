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
    header("Location: productos.php");
}

$tema = "claro";

if (isset($_COOKIE["tema"])){
    $tema = $_COOKIE["tema"];
}

if(isset($_POST["gTema"]) && isset($_POST["tema"])){
    $tema = $_POST["tema"];
    setcookie("tema", $tema, time() + (60*60*24*7));
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <style>
        .claro {background-color: white; color: black;}
        .oscuro {background-color: black; color: white;}
    </style>
</head>
<body class="<?php echo $tema ?>">

    <h1>Productos</h1>

    <form method="post">
        <label for="P1">Juego de dados</label>
        <input type="submit" id="P1" name="P1" value="Añadir al carrito">
        <br>

        <label for="P2">Manual</label>
        <input type="submit" id="P2" name="P2" value="Añadir al carrito">
        <br>

        <label for="P3">Miniatura</label>
        <input type="submit" id="P3" name="P3" value="Añadir al carrito">
        <br>

        <button type="submit">Enviar</button><br>

    </form>

    <form method='post'>
        <button type='submit' id='vaciar' name='vaciar'>Vaciar</button>
    </form>

    <a href="carrito.php">Ir al carrito</a>

    <br>
    <br>

    <form method="post">
        <input type="radio" name="tema" value="claro"> Tema claro
        <input type="radio" name="tema" value="oscuro"> Tema oscuro
        <br>
        <input type="submit" name="gTema" value="Guardar tema">
    </form>


    



</body>
</html>