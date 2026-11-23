<?php

    require "conexion.php";
    /** @var DBO $db */

    if(isset($_GET['id'])){
        $consulta2 = $db->query("SELECT id, nombre, tipo, tipo2 FROM pokemon WHERE id=".$_GET['id']);
    }

    if(isset($_POST['buscador'])){
        var_dump($_POST['buscador']);
        $consulta = $db->query("SELECT id, nombre FROM pokemon");

    } else {
        $consulta = $db->query("SELECT id, nombre FROM pokemon");
    }
    
    $consulta4 = $db->query("SELECT DISTINCT tipo FROM pokemon");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej prueba</title>
</head>
<body>

<?php

if(isset($_GET['id'])){
    $r = $consulta2->fetch(PDO::FETCH_ASSOC);

    echo "<p>ID = ".$r['id']."</p>";
    echo "<p>NOMBRE = ".$r['nombre']."</p>";
    echo "<p>TIPO = ".$r['tipo']."</p>";
    if($r['tipo2'] !== null){
        echo "<p>TIPO 2 = ".$r['tipo2']."</p>";
    }        
}

echo "<form method='post'>";

    echo "<label for='buscador'>Busca por nombre</label><br>";
    echo "<input name='buscador' id='buscador' type='text'>";

    echo "<label></label>";
    echo "<select id='filtro' name='filtro'>";
    echo "<option value='Todos'>Todos</option>";
    while($fila=$consulta4->fetch(PDO::FETCH_ASSOC)){
        echo "<option value=".$fila['tipo'].">".$fila['tipo']."</option>";
    }
    echo "<option value='Volador'>Volador</option>";
    echo "</select><br>";


    echo "<input type='submit'>";

echo "</form>";

?>

<h1>Lista de pokemons</h1>

<ul>

<?php


    while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){

        if(isset($_POST['buscador']) && isset($_POST['filtro'])){

            if(str_contains($fila['nombre'],$_POST['buscador']) && (str_contains($fila['tipo'],$_POST['filtro']) || str_contains($fila['tipo2'],$_POST['filtro']) )){
                echo "<li>".$fila['id'].", <a href=Ejercicios.php?id=".$fila['id'].">".$fila['nombre']. "</a></li>";
            }

        } elseif(isset($_POST['buscador'])){

            if(str_contains($fila['nombre'],$_POST['buscador'])){
                echo "<li>".$fila['id'].", <a href=Ejercicios.php?id=".$fila['id'].">".$fila['nombre']. "</a></li>";
            }

        } elseif(isset($_POST['filtro'])){

            if(str_contains($fila['tipo'],$_POST['filtro']) || str_contains($fila['tipo2'],$_POST['filtro'])){
                echo "<li>".$fila['id'].", <a href=Ejercicios.php?id=".$fila['id'].">".$fila['nombre']. "</a></li>";
            }

        } else {
            echo "<li>".$fila['id'].", <a href=Ejercicios.php?id=".$fila['id'].">".$fila['nombre']. "</a></li>";
        }

        
    }

?>

</ul>

</body>
</html>