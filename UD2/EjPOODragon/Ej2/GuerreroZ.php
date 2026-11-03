<?php

class GuerreroZ {

    private string $nombre;
    private int $salud = 100;
    private int $poderAtaque;

    public function __construct(string $nombre, int $poderAtaque){
        if(empty($nombre)){
            throw new InvalidArgumentException();
        }else{
            $this->nombre = $nombre;
        }

        if($poderAtaque<=0){
            throw new InvalidArgumentException();
        }else{
            $this->poderAtaque = $poderAtaque;
        }

        $this->salud = 100;
    }

    public function recibirDanio(int $cantidad){
        if($cantidad > 0){
            if ($this->salud - $cantidad >= 0 ){

                $this->salud -= $cantidad;
                
            }
        }
    }

    public function estaEnPie():bool{
        if ($this->salud <= 0){
            return false;
        } else{
            return true;
        }
    }


    public function getNombre(): string{
        return $this->nombre;
    }

    public function setNombre(string $nombre): void{
        $this->nombre = $nombre;
    }

    public function getSalud(): int{
        return $this->salud;
    }

    public function setSalud(int $salud): void{
        $this->salud = $salud;
    }

    public function getpoderAtaque(): int{
        return $this->poderAtaque;
    }

    public function setpoderAtaque(int $poderAtaque): void{
        $this->poderAtaque = $poderAtaque;
    }

}

?>