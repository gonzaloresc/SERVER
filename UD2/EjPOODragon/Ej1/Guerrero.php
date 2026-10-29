<?php

class Guerrero {

    private string $nombre;
    private int $energia;
    private int $fuerza;

    private bool $judia = true;
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

        $this->energia = self::ENERGIA_MAXIMA;
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
        if($this->judia){
            if($this->energia != self::ENERGIA_MAXIMA){
                $this->energia = self::ENERGIA_MAXIMA;
                $this->judia = false;
                return "La energia ya está al maximo";
            } else {
                return "La energia ya está al máximo";
            }
            
        } else {
            return "No tienes una judia mágica";
        }
    }

    public function mostrarEstado(){
        $resultado = "Nombre: $this->nombre Energia: $this->energia Fuerza: $this->fuerza"; 
        if ($this->judia){
            $resultado .= " Tiene judia";
        } else {
            $resultado .= " No tiene judia";
        }
        return $resultado;
    }
}


?>