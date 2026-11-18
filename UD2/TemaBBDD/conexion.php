<?php
try {
    $db= new PDO("mysql:host=127.0.0.1;dbname=pokedex_kanto","root","");
} catch (PDOException $e){
    echo "error al conectarse a la base de datos: " .$e->getMessage();
}

?>