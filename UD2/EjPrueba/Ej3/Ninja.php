<?php

class Ninja {

    private string $nombre;
    private int $chakra;

    public function __construct(string $nombre, int $chakra){
        $this->nombre = $nombre;
        $this->chakra = $chakra;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function setNombre(string $nombre): void{
        $this->nombre = $nombre;
    }

    public function getChakra(): int{
        return $this->chakra;
    }

    public function setChakra(int $chakra): void{
        $this->chakra = $chakra;
    }

}

?>