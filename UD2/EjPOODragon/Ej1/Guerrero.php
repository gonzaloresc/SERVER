<?php

class Guerrero {

    private string $nombre;
    private int $energia;
    private int $fuerza;

    const ENERGIA_MAXIMA = 100;

    public function __construct(string $nombre, int $fuerza){
        if(empty($nombre)){
            throw new InvalidArgumentException();
        }else{
            $this->nombre = $nombre;
        }
        if($fuerza<=0){
            throw new InvalidArgumentException();
        }else{
            $this->fuerza = $fuerza;
        }

        $this->energia = ENERGIA_MAXIMA;
    }      
    
    public function entrenar(int $horas){

        if($horas <= 0){
            throw new InvalidArgumentException();
        }

        for($i = 0; $i<$horas; $i++){
            if($this->energia > 20){
                $this->energia -= 20;
                $this->fuerza += 5;
            }
        }
    }

    public function descansar(int $horas){
    
        if($horas <= 0){
            throw new InvalidArgumentException();
        }

        for($i = 0; $i<$horas; $i++){
            if($this->energia < 96){
                $this->energia + 15;
                $this->fuerza += 5;
            }
        }
    }

    public function comerJudiaMagica(){
        if($this->energia != ENERGIA_MAXIMA){
        $this->energia = ENERGIA_MAXIMA;
        }
        
    }



}





?>