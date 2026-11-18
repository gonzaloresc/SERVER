<?php

require 'conexion.php';
/** @var PDO $db */
$consulta = $db->query("SELECT * FROM pokemon");
var_dump($consulta);

foreach($consulta as $c){
    var_dump($c);
}