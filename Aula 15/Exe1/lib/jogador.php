<?php

class Jogador {
    private string $Nome;
    private string $Posicao;
    private DateTime $DataNascimento;

    public function __construct($nome){
        $this->Nome = $nome;
    }

    public function setPosicao($posicao){
        $this->Posicao = $posicao;
    }

    public function setDataNascimento($data){
        $this->DataNascimento = $data;
    }
}