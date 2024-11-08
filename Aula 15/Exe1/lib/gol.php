<?php

class Gol {
    private $Time;
    private $Jogador;
    private int $Tempo;
    
    public function __construct($Time, $Jogador, $tempo) {
        $this->Time = $Time;
        $this->Jogador = $Jogador;
        $this->Tempo = $tempo;
    }

    function getTime(){
        return $this->Time;
    }
}