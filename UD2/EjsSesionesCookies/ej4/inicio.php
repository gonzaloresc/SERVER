<?php

    if(!isset($_COOKIE["pagina"])){
        $mensaje = "Bienvenido a la página!!";
    } else {
        if($_COOKIE["pagina"] === "anime"){
            $mensaje = "Tu ultima página fue anime";
        } elseif($_COOKIE["pagina"] === "comics"){
            $mensaje = "Tu ultima página fue comics";
        } elseif($_COOKIE["pagina"] === "videojuegos"){
            $mensaje = "Tu ultima página fue videojuegos";
        } else {
            $mensaje = "Bienvenido a la página!!";
        }
    }
    
    
    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["pagina"])){
        setcookie("pagina",$_POST["pagina"],(time()+ (60*60*24*7)));

        if($_POST["pagina"] === "anime"){
            header("Location: anime.php");
        } elseif($_POST["pagina"] === "comics"){
            header("Location: comics.php");
        } else {
            header("Location: videojuegos.php");
        }

    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 4</title>
</head>
<body>
    
    <h1><?php $mensaje ?></h1>

    <form action="post">

        <button type="submit" id="anime" name="pagina" value="anime">Anime</button>
        <button type="submit" id="comics" name="pagina" value="comics">Comics</button>
        <button type="submit" id="videojuegos" name="pagina" value="videojuegos">videojuegos</button>

    </form>



</body>
</html>