<?php

    if(isset($_POST["quitar"])){
        setcookie("letra","",(time() - 3600));
        $letra = "mediano";
    }

    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["letra"])){
        $letra = $_POST["letra"];
        setcookie("letra",$letra,(time()+ (60*60*24*7)));

    } elseif(isset($_COOKIE["letra"])){
        $letra = $_COOKIE["letra"];

    } else {
        $letra = "mediano";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
<?php
    if($letra === "pequeno"){
        echo "<style> *{font-size: 12px;} </style>";
    } elseif($letra === "grande"){
        echo "<style> *{font-size: 24px;} </style>";
    } else {
        echo "<style> *{font-size: 16px;} </style>";
    }
?>

</head>
<body>
    
    <p>Texto prueba</p>

    <form method="post">
        <label for="letra">Elige un tamaño de letra: </label>
        <input type="radio" id="pequeno" name="letra" value="pequeno">pequeño
        <input type="radio" id="mediano" name="letra" value="mediano">mediano
        <input type="radio" id="grande" name="letra" value="grande">grande
        <br><br>

        <button type="submit">Guardar eleccion</button>

    </form>

    <form method='post'>
        <button type='quitar' id='quitar' name='quitar'>Eliminar preferencia</button>
    </form>


</body>
</html>
