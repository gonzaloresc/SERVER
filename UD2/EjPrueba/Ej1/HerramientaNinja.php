<?php

class HerramientaNinja
{
    private string $nombre;
    private float $precio;

    public function __construct(string $nombre, float $precio){
        $this-> nombre = $nombre;
        $this-> precio = $precio;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function setNombre(string $nombre): void{
        $this->nombre = $nombre;
    }

    public function getPrecio(): float{
        return $this->precio;
    }

    public function setPrecio(float $precio): void{
        $this->precio = $precio;
    }
}