<?php

require_once "lib/gol.php";

class Jogo {
    private $TimeA;
    private $TimeB;
    private array $Gols = [];
    
    public function __construct($TimeA, $TimeB) {
        $this->TimeA = $TimeA;
        $this->TimeB = $TimeB;
    } 

    public function addGol($Time, $jogador){
        $gol = new Gol($Time, $jogador, 1);

        array_push($this->Gols, $gol);

        return 1;
    }

    private function getTimeVencedor(){
    }

    public function getNomeTimeVencedor(){
        $GolsA = 0;
        $GolsB = 0;

        foreach ($this->Gols as $Gol) {
            if ($Gol->getTime()->getNome() == $this->TimeA->getNome()){
                $GolsA++;
            }
            else if ($Gol->getTime()->getNome() == $this->TimeB->getNome()){
                $GolsB++;
            }
        }

        if ($GolsA > $GolsB){
            return $this->TimeA->getNome();
        }
        elseif ($GolsB > $GolsA) {
            return $this->TimeB->getNome();
        }
    }
}