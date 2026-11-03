<?php

require_once "GuerreroZ.php";

class GrupoDefensa{

    private string $nombre;
    private array $guerreros;

    public function __construct(string $nombre){
        $this->nombre = $nombre;
        $this->guerreros = [];
    }



    //public function incorporar(GuerreroZ $guerreroZ):bool {
    //    if($this->buscar($guerreroZ->getNombre()))
    //}

    public function buscar(string $nombre): ?GuerreroZ{

    }



}

?>