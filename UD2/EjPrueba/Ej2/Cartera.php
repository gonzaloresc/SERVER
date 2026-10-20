<?php

class Cartera {

    private int $ryo;

    public function __construct(int $ryo){
        if($ryo <= 0){
            $this->ryo = 0;
        } else {
            $this->ryo = $ryo;
        }
    }

    public function getRyo(): int{
        return $this->ryo;
    }

    public function setRyo(int $ryo): void{
        $this->ryo = $ryo;
    }

    public function pagar(int $pago): void{
        if($pago <= $this->ryo){
            $this->ryo - $pago;
        }
    }

}