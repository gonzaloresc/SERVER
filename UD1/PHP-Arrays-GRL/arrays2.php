<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 2 arrays</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simpledotcss@2/simple.min.css">


</head>
<body>

<p>Ej 2 arrays</p>

<form action="arrays2.php" method="get">
    <p><label for="pregunta">Pregunte a Alakazam </label></p>
    <input type="text" name="pregunta" id="pregunta">

    <br><br>
    <input type="submit">
</form>


</body>
</html>

<?php
//$horas= $_GET['horas'];
//$minutos= $_GET['minutos'];
//$segundos= $_GET['segundos'];
//$segundos++;

$lista = ["Si","No","Quizás","Pregunta despues del proximo combate","Hasta un magikarp lo tiene mas claro"];

$objeto = $lista[rand(0,count($lista)-1)];
echo "<p>$objeto</p>";