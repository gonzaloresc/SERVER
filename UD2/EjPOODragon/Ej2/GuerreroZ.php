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

    


}